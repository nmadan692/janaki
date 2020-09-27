@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <div class="m-content">
            @include('admin.teacher.partials.form',
                        $data=[
                            'form-action' => 'admin.teacher.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Teacher',
                            'button-text' => 'Save',
                            'teacher' => null
                        ]
            )
        </div>
    </div>
@endsection
