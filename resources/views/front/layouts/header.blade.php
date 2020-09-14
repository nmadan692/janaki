<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <p>HAVE ANY QUESTION ?  +977 9851146341</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul>
                            <li><a href="login.html">login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area two header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('front')}}/img/logo/logo2.png" alt="eduhome" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-6">
                    <div class="content-wrapper text-right">
                        <!-- Main Menu Start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a>

                                    </li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('courses') }}">courses</a>
{{--                                        <ul>--}}
{{--                                            <li><a href="course.html">course 1</a></li>--}}
{{--                                            <li><a href="course-details.html">course 2</a></li>--}}
{{--                                        </ul>--}}
                                    </li>
                                    <li><a href="{{ route('event') }}">event</a>

                                    </li>

                                    <li><a href="{{ route('blog') }}">blog</a>

                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>

                                </ul>
                            </nav>
                        </div>

                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                </div>
            </div>
        </div>
    </div>
</header>
