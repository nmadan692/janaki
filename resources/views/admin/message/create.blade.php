@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
            @include('admin.message.partials.form',
                        $data=[
                            'form-action' => 'admin.message.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Message From MD',
                            'button-text' => 'Save',
                            'message' => null
                        ]
            )
    </div>
@endsection
