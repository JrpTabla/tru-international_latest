@extends('header.header')

@section('content')


<link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/blog/landing-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/blog/second-section.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset ('assets/css/UG/third-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/fourth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/fifth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/sixth-section.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/UG/seventh-section.css') }}"> -->

<div class="main">
    <!-- Fourth Section Start -->
    <section id="blog-landing-section" class="blog-landing-section"></section>

    <section id="ug-fourth-section" class="ug-fourth-section">
        <div class="ug-fourth-section-container row mx-auto">
            <div class="ug-fourth-section-first-div row">
            <div class="ug-fourth-section-first-content d-flex col-12 col-xl-6">
                <div class="m-auto ug-fourth-section-first-content-details">
                <div class="ug-fourth-section-first-content-title text-center">TRU Insights</div>
                    <div class="ug-fourth-section-first-content-img">
                        <img src="{{ asset ('assets/images//blog/second-section/images.png') }}" alt=""/>
                    </div>
                </div>
            </div>
            <div class="ug-fourth-section-first-content d-flex col-12 col-xl-6">
                <div class="m-auto ug-fourth-section-first-content-details-2">
                    <div class="ug-fourth-section-first-content-title-2">Featured Article</div>

                </div>
            </div>
            
        </div>
    </section>



@endsection