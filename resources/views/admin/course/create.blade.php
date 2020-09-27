@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
            @include('admin.course.partials.form',
                        $data=[
                            'form-action' => 'admin.course.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Course',
                            'button-text' => 'Save',
                            'course' => null
                        ]
            )
    </div>
@endsection
