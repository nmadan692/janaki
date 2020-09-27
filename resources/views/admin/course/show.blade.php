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
                                    <h3 class="m-form__section">Course</h3>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Description</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($course->description) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">How To Apply</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($course->apply_process) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Certification</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($course->certification) !!}</p>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Start Date</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->start_date }}" readonly>
                                </div>
                                <label for="example-text-input" class="col-2 col-form-label">Deadline</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->deadline }}" readonly>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Course Duration</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->duration }}" readonly>
                                </div>
                                <label for="example-text-input" class="col-2 col-form-label">Class Duration</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->class_duration}}" readonly>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Seats</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->seats }}" readonly>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Fee</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->fee }}" readonly>
                                </div>
                                <label for="example-text-input" class="col-2 col-form-label">Skill Level</label>
                                <div class="col-4">
                                    <input class="form-control m-input" type="text" value="{{ $course->skill_level }}" readonly>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-4">
                                    <img src="{{ getImageUrl($course->image) }}" alt="" width="350px" height="110px">
                                </div>
                            </div>



                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
