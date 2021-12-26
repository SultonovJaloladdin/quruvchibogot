@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Projects</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Our Projects</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Projects</p>
            <h2>Visit Our Projects</h2>
        </div>
        <!-- <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".first">Complete</li>
                    <li data-filter=".second">Running</li>
                    <li data-filter=".third">Upcoming</li>
                </ul>
            </div>
        </div> -->
        <div class="row portfolio-container">
        @foreach($projects as $index => $project)
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="{{ Voyager::image($project->image)}}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>{{$project->body}}</p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>{{$project->title}}</h3>
                        <a class="btn" href="{{ Voyager::image($project->image)}}" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-12 load-more">
                <a class="btn" href="#">Ko'proq Yuklash</a>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

@endsection