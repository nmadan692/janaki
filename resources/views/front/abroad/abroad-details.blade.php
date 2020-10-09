@extends('front.layouts.master')

@section('content')

    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Abroad Studies</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Teacher Start -->
    <div class="teacher-details-area pt-150 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="teacher-details-img">
                        <img src="{{ getImageUrl($abroad->image) }}" alt="teacher">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="teacher-details-content ml-50">
                        <h2>{{ $abroad->name }}</h2>
                        <h5>{{ $abroad->course_name }}</h5>
                        <h4>Description</h4>
                        <p>{!! $abroad->description !!}</p>
                        <ul>
                            <li><span>Degree: </span>{{ $abroad->course_name }}</li>
                            <li><span>Duration: </span>{{ $abroad->course_duration }}</li>
                            <li><span>Requirements: </span>{{ $abroad->requirements }}</li>
                            <li><span>Intake: </span>{{ $abroad->intake }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="teacher-contact">
                        <h4>contact information</h4>
                        <p><span>mail us : </span>Janakieducationhub@gmail.com</p>
                        <p><span>make a call : </span>(+977) 9851146341</p>

{{--                        <ul>--}}
{{--                            <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>--}}
{{--                            <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>--}}
{{--                            <li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                        </ul>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
