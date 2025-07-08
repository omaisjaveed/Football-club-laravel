@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <span class="panel-title d-none">{{ _lang('Create Gallery') }}</span>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Gallery Date</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Single Image</label>
                    <input type="file" class="dropify" name="image">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Gallery Images</label>
                    <input type="file" class="dropify" name="images[]" multiple>
                    @error('images')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @error('images.*')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection