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
                                <h2>Abroad Study</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Teacher Start -->
    <div class="teacher-area pt-150 pb-105">
        <div class="container">
            <div class="row">
                @forelse($abroad as $abroad)

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="{{ route('abroad.details', encrypt($abroad->id) )  }}"><img src="{{ getImageUrl($abroad->image) }}" alt="teacher"></a>
                            </div>
                            <div class="single-teacher-content text-center mb-45">
                                <h2><a href="{{ route('abroad.details', encrypt($abroad->id) )  }}">{{ $abroad->name }}</a></h2>
                                <h4>{!! strip_tags(Str::limit($abroad->description,100)) !!}</h4>


                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">

                            <p>No recent Abroad Studies are available.</p>

                        </div>
                    </div>

                @endforelse



            </div>
        </div>
    </div>
    <!-- Teacher End -->
@endsection
