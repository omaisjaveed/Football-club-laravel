@extends('theme.certified_lions.website')

@section('content')

<section class="about-us-sec">
    <div class="container">
        <div class="about-us-banner">
            <h1>ACADEMY</h1>
        </div>
    </div>
</section>

<section class="academic-sec">
    <div class="container">
        <div class="acadymic-cont-sec">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="abt-cont">
                        {!! get_trans_option('academy_content') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="abt-main-pic">
                        <img src="{{ get_option('academy_image') != '' ? asset('public/uploads/media/'.get_option('academy_image')) : '' }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection