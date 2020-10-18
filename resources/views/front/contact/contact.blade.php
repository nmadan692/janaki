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
                                <h2>contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Contact Start -->
    <div class="map-area">
        <!-- google-map-area start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area" >

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14135.623258790454!2d85.34962893164065!3d27.658385574993737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb10aa668e649f%3A0x302b443de16adbd5!2sTikathali%2C%20Mahalaxmi!5e0!3m2!1sen!2snp!4v1600092562178!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </div>
    </div>
    <div class="contact-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="contact-contents text-center">
                        <div class="single-contact mb-65">
                            <div class="contact-icon">
                                <img src="{{asset('front')}}/img/contact/contact1.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>address</h3>
                                <p>{{ $setting[0]->address  ?? null }}</p>

                            </div>
                        </div>
                        <div class="single-contact mb-65">
                            <div class="contact-icon">
                                <img src="{{asset('front')}}/img/contact/contact2.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>Phone</h3>
                                <p> {{ $setting[0]->phone  ?? null }}</p>
                                <p>{{ $setting[0]->viber  ?? null }}</p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <img src="{{asset('front')}}/img/contact/contact3.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>email</h3>
                                <p>{{ $setting[0]->email  ?? null }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reply-area">
                        <h3>LEAVE A message</h3>
                        <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>

                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row contact-custom">
                                <div class="col-lg-12">
                                    <p>Name</p>
                                    <input type="text" name="name" id="name"  class="{{ $errors->first('name') ? 'has-error' : ''}}">
                                    @if($errors->first('name'))
                                        <span class="error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <p>Email</p>
                                    <input type="text" name="email" id="email" class="{{ $errors->first('email') ? 'has-error' : ''}}">
                                    @if($errors->first('email'))
                                        <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row contact-custom">
                                <div class="col-lg-12">
                                    <p>Message</p>
                                    <textarea id="message" cols="15" rows="10" name="message" class="{{ $errors->first('message') ? 'has-error' : ''}}"></textarea>
                                    @if($errors->first('message'))
                                        <span class="error">{{ $errors->first('message') }}</span>
                                    @endif
                                    <button type="submit" class="site-btn">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>

{{--                        <form id="contact-form" action="{{ route('contact.store') }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <p>Name</p>--}}
{{--                                    <input id="name" type="text" name="name"  class="{{ $errors->first('name') ? 'has-error' : ''}}">--}}
{{--                                    @if($errors->first('name'))--}}
{{--                                        <span class="error">{{ $errors->first('name') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <p>Email</p>--}}
{{--                                    <input id="email" type="text" name="email" class="{{ $errors->first('email') ? 'has-error' : ''}}">--}}
{{--                                    @if($errors->first('email'))--}}
{{--                                        <span class="error">{{ $errors->first('email') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}

{{--                                    <p>Massage</p>--}}
{{--                                    <textarea id="message" cols="15" rows="10" name="message" class="{{ $errors->first('message') ? 'has-error' : ''}}"></textarea>--}}
{{--                                    @if($errors->first('message'))--}}
{{--                                        <span class="error">{{ $errors->first('message') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            --}}
{{--                            <a class="reply-btn"  type="submit"  href="{{ route('contact.store') }}" data-text="send"><span>send message</span></a>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Subscribe Start -->
{{--    <div class="subscribe-area pt-60 pb-70">--}}
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
    <!-- Subscribe End -->
@endsection
