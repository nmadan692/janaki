@extends('front.layouts.master')

@section('content')
<!-- Background Area Start -->
<section id="slider-container" class="slider-area two">
    <div class="slider-owl owl-theme owl-carousel">
        @foreach($banners as $banner)
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url({{ getImageUrl($banner->image) }})">

            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="slide-content-wrapper">
                                <div class="slide-content text-center">
                                    <h2>{{ $banner->tittle }}</h2>
                                    <p>{{ $banner->sub_tittle }} </p>
                                    <a class="default-btn" href="{{ route('contact.index') }}">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        @endforeach

    </div>
</section>
<!-- Background Area End -->
<!-- Service Start -->
{{--<div class="service-area two pt-150 pb-150">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                <div class="single-service">--}}
{{--                    <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>--}}
{{--                    <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                <div class="single-service">--}}
{{--                    <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>--}}
{{--                    <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                <div class="single-service">--}}
{{--                    <h3><a href="teacher.html">PROFESSIONAL TEACHER</a></h3>--}}
{{--                    <p>I must explain to you how all this mistaken denouncing pleure and praising pain </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Service End -->
<!-- About Start -->
<div class="about-area pb-155  pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-content">
                    <h2>WELCOME TO <span>Janaki Education</span></h2>
                    <p>{!! $about[0]->about_us ?? null !!}</p>
                    <a class="default-btn" href="{{ route('contact.index') }}">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-img">
                    <img src="{{ getImageUrl($about[0]->image ?? null) }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Courses Area Start -->
<div class="courses-area two pt-150 pb-150 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <img src="{{asset('front')}}/img/icon/section1.png" alt="section-title">
                    <h2>COURSES WE OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($recentCourses as $recentCourse)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="{{ route('courses.details', encrypt($recentCourse->id) )  }}"><img src="{{ getImageUrl($recentCourse->image) }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('courses.details', encrypt($recentCourse->id) )  }}">{{ $recentCourse->name }}</a></h3>
                            <p>{!! strip_tags(Str::limit($recentCourse->description,100)) !!}</p>
                            <a class="default-btn" href="{{ route('courses.details', encrypt($recentCourse->id) )  }}">read more</a>
                        </div>
                    </div>
                </div>

            @empty
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item">

                        <p>No recent courses are available.</p>

                    </div>
                </div>

            @endforelse

        </div>
    </div>
</div>
<!-- Courses Area End -->
<!-- Notice Start -->
<section class="notice-area two pt-140">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="notice-right">
                    <div class="single-notice-right mb-25 pb-25">
                        <h3>Confidence</h3>
                        <p>{!! $about[0]->confidence ?? null !!}</p>
                    </div>
                    <div class="single-notice-right mb-25 pb-25">
                        <h3>Community</h3>
                        <p>{!! $about[0]->community ?? null !!}</p>

                    </div>
                    <div class="single-notice-right mb-25 pb-25">
                        <h3>Programs</h3>
                        <p>{!! $about[0]->programs ?? null !!}</p>

                    </div>
                    <div class="single-notice-right">
                        <h3>Success</h3>
                        <p>{!! $about[0]->success ?? null !!}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="notice-left-wrapper">
                    <div class="notice-left">
                        <h3>notice board</h3>

                        @forelse($notices as $notice)

                        <div class="single-notice-left mb-23 pb-20">
                            <h4>{{ $notice->posted_date }}</h4>
                            <p>{!! $notice->notice  !!} </p>
                        </div>

                        @empty
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">

                                    <p>No recent notices are available.</p>

                                </div>
                            </div>

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notice End -->
<!-- Event Area Start -->
{{--<div class="event-area two text-center pt-100 pb-145">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12">--}}
{{--                <div class="section-title">--}}
{{--                    <img src="{{asset('front')}}/img/icon/section1.png" alt="section-title">--}}
{{--                    <h2>UPCOMMING EVENTS</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 col-sm-12 col-xs-12">--}}
{{--                <div class="single-event mb-35">--}}
{{--                    <div class="event-img">--}}
{{--                        <a href="{{ route('event.details') }}"><img src="{{asset('front')}}/img/event/event.jpg" alt="event"></a>--}}
{{--                    </div>--}}
{{--                    <div class="event-content text-left">--}}
{{--                        <h3>20 June 2017</h3>--}}
{{--                        <h4><a href="{{ route('event.details') }}">ADVANCE PHP WORKSHOP</a></h4>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>--}}
{{--                            <li><i class="fa fa-map-marker"></i>Kathmandu</li>--}}
{{--                        </ul>--}}
{{--                        <div class="event-content-right">--}}
{{--                            <a class="default-btn" href="{{ route('event.details') }}">join now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="single-event hidden-sm hidden-xs">--}}
{{--                    <div class="event-img">--}}
{{--                        <a href="{{ route('event.details') }}"><img src="{{asset('front')}}/img/event/event.jpg" alt="event"></a>--}}
{{--                    </div>--}}
{{--                    <div class="event-content text-left">--}}
{{--                        <h3>16 June 2017</h3>--}}
{{--                        <h4><a href="{{ route('event.details') }}">Physic Workshop</a></h4>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>--}}
{{--                            <li><i class="fa fa-map-marker"></i>kathmandu</li>--}}
{{--                        </ul>--}}
{{--                        <div class="event-content-right">--}}
{{--                            <a class="default-btn" href="{{ route('event.details') }}">join now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-12 col-xs-12">--}}
{{--                <div class="single-event mb-35">--}}
{{--                    <div class="event-img">--}}
{{--                        <a href="{{ route('event.details') }}"><img src="{{asset('front')}}/img/event/event.jpg" alt="event"></a>--}}
{{--                    </div>--}}
{{--                    <div class="event-content text-left">--}}
{{--                        <h3>18 June 2017</h3>--}}
{{--                        <h4><a href="{{ route('event.details') }}">DIGITAL MARKETING ANALYSIS</a></h4>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>--}}
{{--                            <li><i class="fa fa-map-marker"></i>Kathmandu</li>--}}
{{--                        </ul>--}}
{{--                        <div class="event-content-right">--}}
{{--                            <a class="default-btn" href="{{ route('event.details') }}">join now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="single-event hidden-sm hidden-xs">--}}
{{--                    <div class="event-img">--}}
{{--                        <a href="#"><img src="{{asset('front')}}/img/event/event.jpg" alt="event"></a>--}}
{{--                    </div>--}}
{{--                    <div class="event-content text-left">--}}
{{--                        <h3>14 June 2017</h3>--}}
{{--                        <h4><a href="#">UI & UX DESIGNER MEETUP</a></h4>--}}
{{--                        <ul>--}}
{{--                            <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>--}}
{{--                            <li><i class="fa fa-map-marker"></i>Kathmandu</li>--}}
{{--                        </ul>--}}
{{--                        <div class="event-content-right">--}}
{{--                            <a class="default-btn" href="#">join now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Event Area End -->
<!-- Testimonial Area Start -->
{{--<div class="testimonial-area pt-110 pb-105 text-center">--}}
{{--    <div class="container">--}}

{{--        <div class="row">--}}
{{--            <div class="testimonial-owl owl-theme owl-carousel">--}}
{{--                <div class="col-md-8 col-md-offset-2 col-sm-12">--}}
{{--                    <div class="single-testimonial">--}}
{{--                        <div class="testimonial-info">--}}
{{--                            <div class="testimonial-img">--}}
{{--                                <img src="{{asset('front')}}/img/testimonial/testimonial.jpg" alt="testimonial">--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-content">--}}
{{--                                <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>--}}
{{--                                <h4>David Morgan</h4>--}}
{{--                                <h5>Student, CSE</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Testimonial Area End -->
<!-- Blog Area Start -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title text-center">
{{--                    <img src="{{asset('front')}}/img/icon/section.png" alt="section-title">--}}
                    <h2>LATEST FROM BLOG</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse($recentBlogs as $recentBlog)

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog mb-60">
                        <div class="blog-img">
                            <a href="{{ route('blog.details', encrypt($recentBlog->id) )  }}"><img src="{{ getImageUrl($recentBlog->image) }}" alt="blog"></a>
                            <div class="blog-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Admin  /  {{ $recentBlog->created_at }} </p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ route('blog.details', encrypt($recentBlog->id) )  }}">{{$recentBlog->name}}</a></h2>
                                <p>{!! strip_tags(Str::limit($recentBlog->description,100)) !!}</p>

                                <a href="{{ route('blog.details', encrypt($recentBlog->id) )  }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>


            @empty
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="blog__item">

                        <p>No recent blogs are available.</p>

                    </div>
                </div>

            @endforelse

        </div>
    </div>
</div>
<!-- Blog Area End -->
<!-- Subscribe Start -->
{{--<div class="subscribe-area pt-60 pb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 col-md-offset-2">--}}
{{--                <div class="subscribe-content section-title text-center">--}}
{{--                    <h2>subscribe our newsletter</h2>--}}
{{--                    <p>I must explain to you how all this mistaken idea </p>--}}
{{--                </div>--}}
{{--                <div class="newsletter-form mc_embed_signup">--}}
{{--                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>--}}
{{--                        <div id="mc_embed_signup_scroll" class="mc-form">--}}
{{--                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>--}}
{{--                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
{{--                            <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <!-- mailchimp-alerts Start -->--}}
{{--                    <div class="mailchimp-alerts">--}}
{{--                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->--}}
{{--                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->--}}
{{--                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->--}}
{{--                    </div>--}}
{{--                    <!-- mailchimp-alerts end -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Subscribe End -->
@endsection
