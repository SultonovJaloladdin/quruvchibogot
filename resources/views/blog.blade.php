@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Blog</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Our Blog</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest Blog</p>
            <h2>Latest From Our Blog</h2>
        </div>
        <div class="row blog-page">
        @foreach($posts as $index => $post)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ Voyager::image($post->thumbnail('small', 'image'))}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>{{$post->title}}</h3>
                        <a class="btn" href="{{ route('blog.show', $post->slug) }}">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>{{$post->created_at}}</p>
                    </div>
                    <div class="blog-text">
                        <p>
                            {{$post->excerpt}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul> 
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection