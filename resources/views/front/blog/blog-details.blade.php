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
                                <h2>blog details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-details-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="blog-details-img">
                            <img src="{{ getImageUrl($blog->image) }}" alt="blog-details">
                        </div>
                        <div class="blog-details-content">
                            <h2>{{ $blog->name  }}</h2>
                            <h6>By Admin  /  {{ $blog->created_at }}  </h6>
                            <p>{!! $blog->description !!}<p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-47">
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
                        <div class="single-blog-widget mb-47">
                            <h3>categories</h3>
                            <ul>
                                @foreach($blogCategory  as $blogCategory)
                                    <li><a href="{{ route('blog', ['id' => encrypt($blogCategory->id)]) }}">{{ $blogCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-47">
                            <div class="single-blog-banner">
                                <a href="#" id="blog"><img src="{{asset('front')}}/img/blog/blog-img.jpg" alt="blog"></a>
                                <h2>best<br> eductaion<br> theme</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-47">
                            <h3>latest post</h3>
                            @foreach($recentBlog as $recentBlog)
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="{{ route('blog.details', encrypt($recentBlog->id))}}"><img src="{{ getImageUrl($recentBlog->image) }}" width="95px" height="84px" alt="post">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
