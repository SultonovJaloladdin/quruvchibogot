@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Services</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Our Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>We Provide Services</h2>
        </div>
        <div class="row">
        <?$t=0;?>
        @foreach($services as $index => $service)
        <?$t=$t+1?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{$t}}s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ Voyager::image($service->image)}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {!! $service->body !!}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{ $service->title }}</h3>
                        <a class="btn" href="{{ Voyager::image($service->image)}}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- Service End -->


<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Frequently Asked Question</p>
            <h2>You May Ask</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.4s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.5s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

@endsection