@extends('admin.layouts.master')

@section('content')

    <div class="col-xl-12 col-lg-12" style="margin-top: 1%">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--unair">

            <div class="tab-content">
                <div class="tab-pane active" id="m_user_profile_tab_1">
                    <form class="m-form m-form--fit m-form--label-align-right">
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <div class="col-12 ml-auto" style="text-align: center;">
                                    <h3 class="m-form__section">Abroad</h3>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Country</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $abroad->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Description</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($abroad->description) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Course</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($abroad->course_name) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Course Duration</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($abroad->course_duration) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Intake</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $abroad->intake }}" readonly>
                                </div>

                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Requirements </label>
                                <div class="col-4">
                                    <p>{{ $abroad->requirements }}</p>
                                </div>
                            </div>



                            <div class="form-group m-form__group row">

                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-4">
                                    <img src="{{ getImageUrl($abroad->image) }}" alt="" width="350px" height="110px">
                                </div>
                            </div>



                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
