@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.message.partials.form',
                    $data=[
                        'form-action' => 'admin.message.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Message From MD',
                        'button-text' => 'Update',
                        'message' => $message
                    ]
        )
    </div>
@endsection
