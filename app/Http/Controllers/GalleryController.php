<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Gallery = Gallery::all()->sortByDesc("id");
        return view('backend.gallery.list')->with(['Gallery' => $Gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     public function store(Request $request)
    {
        // Validation Rules
        $request->validate([
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'date.required' => 'Please select a date.',
            'date.date' => 'Invalid date format.',
            'image.image' => 'Uploaded file must be an image.',
            'image.mimes' => 'Only JPEG, PNG, JPG formats are allowed.',
            'image.max' => 'Single image size must not exceed 2MB.',
            'images.array' => 'Multiple images should be an array.',
            'images.max' => 'You can upload a maximum of 5 images.',
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG formats are allowed for gallery images.',
            'images.*.max' => 'Each gallery image size must not exceed 2MB.',
        ]);

        if (!$request->hasFile('image') && !$request->hasFile('images')) {
            return back()->withErrors(['image' => 'Please upload at least one image (single or gallery).'])->withInput();
        }

        $Gallery = new Gallery();
        $Gallery->date = $request->input('date');

        if ($request->hasFile('image')) {
            $singleImage = $request->file('image');
            $imageName = time() . '_single.' . $singleImage->getClientOriginalExtension();
            $singleImage->move(public_path('images/Gallery'), $imageName);
            $Gallery->single_image = 'images/Gallery/' . $imageName;
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $imagePaths = [];

            foreach ($images as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/Gallery'), $imageName);
                $imagePaths[] = 'images/Gallery/' . $imageName;
            }

            $Gallery->image = json_encode($imagePaths);
        }

        $Gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery added successfully!');
    }

    // public function store(Request $request)
    // {
    //     $Gallery = new Gallery();
    //     $Gallery->date = $request->input('date');

    //     if ($request->hasFile('images')) {
    //         $images = $request->file('images');
    //         $imagePaths = [];

    //         foreach ($images as $image) {
    //             $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('images/Gallery'), $imageName);

    //             // Store the image path
    //             $imagePaths[] = 'images/Gallery/' . $imageName;
    //         }

    //         // Save the image paths as a JSON string
    //         $Gallery->image = json_encode($imagePaths);
    //     }

    //     $Gallery->save();

    //     return redirect()->route('gallery.index');
    // }

    public function edit($id)
    {
        $Gallery = Gallery::find($id);
        return view('backend.gallery.edit', compact('Gallery'));
    }

    public function update(Request $request, $id)
    {
        $Gallery = Gallery::find($id);

        $Gallery->date = $request->input('date');
        if ($request->hasFile('image')) {
            if ($Gallery->image) {
                $oldImagePath = public_path($Gallery->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/Gallery', $imageName);

            $imagePath = 'images/Gallery/' . $imageName;

            $Gallery->image = $imagePath;
        }

        $Gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully');
    }

    public function delete(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery deleted successfully');
    }

    public static function getData()
    {
        $gallery = Gallery::all()->sortByDesc("id");
        return $gallery;
    }
}
