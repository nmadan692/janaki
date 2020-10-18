<div class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-widget pr-60">
                    <div class="footer-logo pb-25">
                        <a href="{{ route('home') }}"><img src="{{ getImageUrl( $setting[0]->logo ?? null) }}" alt="janaki education hub"></a>
                    </div>
<p>We are dedicated to provide best solutions to the students seeking for Language classes, Computer Classes, Tuition Classes and many more.</p>
                    <div class="footer-social">
                        <ul>
                            <li><a href="{{ $setting[0]->facebook ?? null}}"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="{{ $setting[0]->instagram ?? null}}"><i class="zmdi zmdi-instagram"></i></a></li>
                            <li><a href="{{ $setting[0]->twitter ?? null}}"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-widget">
                    <h3>information</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('courses') }}">Course</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="single-widget">
                    <h3>useful links</h3>
                    <ul>

                        <li><a href="{{ route('about') }}">about us</a></li>

                        <li><a href="#">teams &amp; conditions</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-widget">
                    <h3>get in touch</h3>
                    <p>Our address goes here, Street<br>Tikathali, Lalitpur Nepal</p>
                    <p>{{ $setting[0]->phone ?? null}}</p>
                    <p>{{ $setting[0]->email ?? null}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Copyright © <a href="#" target="_blank">Janaki Education Hub</a> 2021. All Right Reserved.</p>
            </div>
        </div>
    </div>
</div>
