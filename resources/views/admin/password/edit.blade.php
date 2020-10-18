@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.password.partials.form',
                    $data=[
                        'form-action' => 'admin.password.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Password',
                        'button-text' => 'Update',
                        'password' => $password
                    ]
        )
    </div>
@endsection
