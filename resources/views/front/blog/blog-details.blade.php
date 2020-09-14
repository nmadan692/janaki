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
                            <img src="{{asset('front')}}/img/blog/blog-detail.jpg" alt="blog-details">
                        </div>
                        <div class="blog-details-content">
                            <h2>I must explain to you how all this a mistaken idea </h2>
                            <h6>By Alex  /  June 20, 2017  /  <i class="fa fa-comments-o"></i> 4</h6>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque sa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volutatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
                            <p class="quote">I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam</p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque sa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo emo enim ipsam</p>
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
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Political Science</a></li>
                                <li><a href="#">Micro Biology</a></li>
                                <li><a href="#">HTML5 &amp; CSS3</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">PHP</a></li>
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
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post1.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post2.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">Advance Web Design and Develop</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post3.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
