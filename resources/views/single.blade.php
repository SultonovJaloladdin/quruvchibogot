@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Single Page</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Single Page</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <img src="{{ Voyager::image($post->image) }}" />
                    <h2>{{ $post->title }}</h2>
                    <p>{!! $post->body !!}</p>
                    <p>{{ $post->created_at }}</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget wow fadeInUp">
                        <div class="search-widget">
                            <form>
                                <input class="form-control" type="text" placeholder="Search Keyword">
                                <button class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Recent Post</h2>
                        <div class="recent-post">
                        @foreach($recent_posts as $index => $post)
                            <div class="post-item">
                                <div class="post-img">
                                <img src="{{ Voyager::image($post->thumbnail('small', 'image'))}}" />
                                </div>
                                <div class="post-text">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{$post->title}}</a>
                                    <div class="post-meta">
                                        <p>{{$post->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <div class="image-widget"> 
                            <a href="{{ route('blog.show', $recent_posts[0]->slug) }}"><img src="{{ Voyager::image($recent_posts[0]->image)}}" alt="Image"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->   

@endsection