@extends('theme.certified_lions.website')

@section('content')

<section class="about-us-sec">
    <div class="container">
        <div class="about-us-banner">
            <h1>MEDIA</h1>
        </div>
    </div>
</section>

<section class="media-sec">
    <div class="container">
        <div class="media-boxs">
    @foreach (App\Http\Controllers\GalleryController::getData() as $data)
        @if(is_array(json_decode($data->image)))
            @foreach(json_decode($data->image) as $index => $image)
                <a data-fancybox="gallery-{{ $data->id }}" href="{{ asset('public/' . $image) }}">
                    <img src="{{ asset('public/' . $image) }}" alt="Gallery Image" width="100px" height="100px">
                </a>
            @endforeach
        @else
            <a data-fancybox="gallery-{{ $data->id }}" href="{{ asset('public/' . $data->image) }}">
                <img src="{{ asset('public/' . $data->image) }}" alt="Single Image" width="100px" height="100px">
            </a>
        @endif
    @endforeach
</div>
    </div>
</section>

<section class="social-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="social-wrap">
                    <h5>FOLLOW US ON</h5>
                </div>
            </div>
            <div class="col-md-5">
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection