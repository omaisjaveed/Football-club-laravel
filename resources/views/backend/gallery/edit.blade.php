@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form method="POST" class="validate" action="{{ route('gallery.update', $Gallery->id) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Gallery Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{!! $Gallery->date !!}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">{{ _lang('Images') }}</label>
                        <input type="file" multiple class="dropify" name="image" data-default-file="{{ asset('public/' .$Gallery->image )  }}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection