@extends('theme.certified_lions.website')

@section('content')

<section class="about-us-sec">
    <div class="container">
        <div class="about-us-banner">
            <h1>ABOUT US</h1>
        </div>
    </div>
</section>

<section class="about-us-sec-inner">
    <div class="container">
        <div class="abt-cont">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="abt-main-pic">
                        <img src="{{ get_option('about_image') != '' ? asset('public/uploads/media/'.get_option('about_image')) : '' }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="abt-cont">
                        {!! get_trans_option('about_content') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection