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
                                <h2>course detail</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="courses-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="courses-details">
                        <div class="courses-details-img">
                            <img src="{{ getImageUrl($course->image) }}" alt="courses-details">
                        </div>
                        <div class="course-details-content">
                            <h2>DATABASE</h2>
                            <p>{!! $course->description !!}</p>
                            <div class="course-details-left">

                                <div class="single-course-left">
                                    <h3>how to apply</h3>
                                    <p>{!! $course->apply_process !!}</p>

                                </div>
                                <div class="single-course-left">
                                    <h3>certification</h3>
                                    <p>{!! $course->certification !!}</p>
                                </div>
                            </div>
                            <div class="course-details-right">
                                <h3>COURSE FEATURES</h3>
                                <ul>
                                    <li>Starts At <span>{{ $course->start_date }}</span></li>
                                    <li>Deadline <span>{{ $course->deadline }}</span></li>
                                    <li>Course Duration <span>{{ $course->duration }}</span></li>
                                    <li>Class Duration <span>{{ $course->class_duration }}</span></li>
                                    <li>Seats <span>{{ $course->seats }}</span></li>
                                    <li>Skill Level <span>{{ $course->skill_level }}</span></li>
                                </ul>
                                <h3 class="red">course fee Nrs {{ $course->fee }}</h3>
                            </div>
                        </div>
{{--                        <div class="reply-area">--}}
{{--                            <h3> BOOK COURSE</h3>--}}
{{--                            <p>You can book our course from here. Please fill up the form. </p>--}}
{{--                            <form id="contact-form" action="mail.php" method="post">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <p>Name</p>--}}
{{--                                        <input type="text" name="name" id="name">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <p>Email</p>--}}
{{--                                        <input type="text" name="email" id="email">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <p>Subject</p>--}}
{{--                                        <input type="text" name="subject" id="subject">--}}
{{--                                        <p>Massage</p>--}}
{{--                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>--}}
{{--                                <p class="form-messege"></p>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-2">
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
