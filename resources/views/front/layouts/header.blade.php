<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <p>HAVE ANY QUESTION ? {{ $setting[0]->phone ?? null}}</p>
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
                        <a href="index.html"><img src="{{ getImageUrl( $setting[0]->logo ?? null) }}"
                                                  alt="eduhome"/></a>
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
                                    <li><a href="{{ route('courses') }}">courses</a></li>
                                    <li><a href="{{ route('abroad') }}">Abroad Study</a>

                                    @if(authenticated('front'))
                                        <li><a href="{{ route('download') }}">Downloads</a>
                                            @endif

                                        </li>

                                        <li><a href="{{ route('blog') }}">blog</a>

                                        </li>
                                        <li><a href="{{ route('contact.index') }}">Contact</a></li>

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
