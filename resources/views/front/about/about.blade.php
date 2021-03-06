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
                                <h2>about us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- About Start -->
    <div class="about-area pt-100 pb-155">
        <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="teacher-details-img">
                            <img src="{{ getImageUrl($message[0]->image  ?? null) }}" alt="teacher">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="teacher-details-content ml-50">
                            <h2 class="pb-20">Message From MD</h2>
                            <p>{!! $message[0]->message_from_md  ?? null !!}</p>
                            <ul>
                                <li><span>Bikash Kumar Jha</span></li>
                                <li><span></span>Managing Director</li>

                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Teacher Start -->
    <div class="teacher-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="{{asset('front')}}/img/icon/section.png" alt="title">
                        <h2>meet our teachers</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse($teachers as $teacher)
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-teacher">
                        <div class="single-teacher-img">
                            <a href="#"><img src="{{ getImageUrl($teacher->image) }}" alt="teacher"></a>
                        </div>
                        <div class="single-teacher-content text-center">
                            <h2><a href="#">{{ $teacher->name }}</a></h2>
                            <h4>{{ $teacher->subject }}</h4>
                            <ul>
                                <li><a href="{{ $teacher->facebook }}"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{ $teacher->twitter }}"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="{{ $teacher->linkedin }}"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="{{ $teacher->instagram }}"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">

                            <p>No recent teachers are available.</p>

                        </div>
                    </div>

                @endforelse

            </div>
        </div>
    </div>
    <!-- Teacher End -->

    <!-- Testimonial Area End -->
{{--    <!-- Notice Start -->--}}
{{--    <section class="notice-area two pt-140 pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="notice-right-wrapper mb-25 pb-25">--}}
{{--                        <h3>TAKE A VIDEO TOUR</h3>--}}
{{--                        <div class="notice-video">--}}
{{--                            <div class="video-icon video-hover">--}}
{{--                                <a class="video-popup" href="https://www.youtube.com/watch?v=to6Ghf8UL7o">--}}
{{--                                    <i class="zmdi zmdi-play"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                    <div class="notice-left-wrapper">--}}
{{--                        <h3>notice board</h3>--}}
{{--                        <div class="notice-left">--}}
{{--                            <div class="single-notice-left mb-23 pb-20">--}}
{{--                                <h4>5, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                            <div class="single-notice-left hidden-sm mb-23 pb-20">--}}
{{--                                <h4>4, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                            <div class="single-notice-left pb-70">--}}
{{--                                <h4>3, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                            <div class="single-notice-left mb-23 pb-20">--}}
{{--                                <h4>5, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                            <div class="single-notice-left hidden-sm mb-23 pb-20">--}}
{{--                                <h4>4, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                            <div class="single-notice-left pb-70">--}}
{{--                                <h4>3, June 2017</h4>--}}
{{--                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Notice End -->--}}
{{--    <!-- Subscribe Start -->--}}
{{--    <div class="subscribe-area pt-58 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-md-offset-2">--}}
{{--                    <div class="subscribe-content section-title text-center">--}}
{{--                        <h2>subscribe our newsletter</h2>--}}
{{--                        <p>I must explain to you how all this mistaken idea </p>--}}
{{--                    </div>--}}
{{--                    <div class="newsletter-form mc_embed_signup">--}}
{{--                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>--}}
{{--                            <div id="mc_embed_signup_scroll" class="mc-form">--}}
{{--                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>--}}
{{--                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
{{--                                <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <!-- mailchimp-alerts Start -->--}}
{{--                        <div class="mailchimp-alerts">--}}
{{--                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->--}}
{{--                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->--}}
{{--                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->--}}
{{--                        </div>--}}
{{--                        <!-- mailchimp-alerts end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Subscribe End -->--}}
@endsection
