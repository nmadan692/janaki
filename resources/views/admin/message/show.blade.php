@extends('admin.layouts.master')

@section('content')

    <div class="col-xl-12 col-lg-12" style="margin-top: 1%">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--unair">

            <div class="tab-content">
                <div class="tab-pane active" id="m_user_profile_tab_1">
                    <form class="m-form m-form--fit m-form--label-align-right">
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <div class="col-10 ml-auto">
                                    <h3 class="m-form__section">Message From MD</h3>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Image</label>
                                <div class="col-4">
                                    <img src="{{ getImageUrl($message->image) }}" alt="" width="200px" height="200px">
                                </div>
                            </div>



                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label">Message From MD</label>
                                <div class="col-4">
                                    <p>{!! strip_tags($message->message_from_md) !!}</p>
                                </div>
                            </div>


                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
