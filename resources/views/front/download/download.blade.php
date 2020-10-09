
@extends('front.layouts.master')

@section('content')

<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>download</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Event Start -->
<div class="event-area three text-center pt-150 pb-150">
    <div class="container">
        <div class="row">
            @forelse($downloads as $download)

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-event mb-60">
                        <div class="event-img">
                            <a href="#">
                                <img src="{{ getImageUrl($download->image) }}" alt="event">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                            <div class="event-date">
                                <h3>20 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="#">{{ $download->name }}</a></h4>
                            <h4>{!! strip_tags(Str::limit($download->description,100)) !!}</h4>
                            <div class="event-content-right">
                                <a class="default-btn" href="#">Download</a>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item">

                        <p>No recent Course Materials are available.</p>

                    </div>
                </div>

            @endforelse



        </div>
    </div>
</div>
<!-- Event End -->

@endsection
