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
                                <h2>blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-sidebar left">
                        <div class="single-blog-widget mb-50">
                            <h3>search</h3>
                            <div class="blog-search">
                                <form id="search" action="#">
                                    <input type="search" placeholder="Search..." name="search" />
                                    <button type="submit">
                                        <span><i class="fa fa-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>categories</h3>
                            <ul>
                                @foreach($blogCategory  as $blogCategory)
                                    <li><a href="{{ route('blog', ['id' => encrypt($blogCategory->id)]) }}">{{ $blogCategory->name }}</a></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="single-blog-widget mb-50">
                            <div class="single-blog-banner">
                                <a href="#" id="blog"><img src="{{asset('front')}}/img/blog/blog-img.jpg" alt="blog"></a>
                                <h2>best<br> eductaion<br> theme</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">

                            <h3>latest post</h3>

                            @foreach($recentBlog as $recentBlog)
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="{{ route('blog.details', encrypt($recentBlog->id))  }}"><img src="{{ getImageUrl($recentBlog->image) }}" width="95px" height="84px" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="{{ route('blog.details', encrypt($recentBlog->id))}}">{{$recentBlog->name}}</a></h4>
                                    <p>By Admin  /  {{ $recentBlog->posted_date }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
{{--                        <div class="single-blog-widget">--}}
{{--                            <h3>tags</h3>--}}
{{--                            <div class="single-tag">--}}
{{--                                <a href="blog-details.html" class="mr-10 mb-10">course</a>--}}
{{--                                <a href="blog-details.html" class="mr-10 mb-10">education</a>--}}
{{--                                <a href="blog-details.html" class="mb-10">teachers</a>--}}
{{--                                <a href="blog-details.html" class="mr-10">learning</a>--}}
{{--                                <a href="blog-details.html" class="mr-10">university</a>--}}
{{--                                <a href="blog-details.html">events</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">

                        @forelse($blog as $blog)

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-blog mb-60">
                                <div class="blog-img">
                                    <a href="{{ route('blog.details', encrypt($blog->id) )  }}"><img src="{{ getImageUrl($blog->image) }}" alt="blog"></a>
                                    <div class="blog-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-top">
                                        <p>By Admin  /  {{ $blog->created_at }} </p>
                                    </div>
                                    <div class="blog-bottom">
                                        <h2><a href="{{ route('blog.details', encrypt($blog->id) )  }}">{{$blog->name}}</a></h2>
                                        <p>{!! strip_tags(Str::limit($blog->description,100)) !!}</p>

                                        <a href="{{ route('blog.details', encrypt($blog->id) )  }}">read more</a>
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



                        <div class="col-md-12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
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
