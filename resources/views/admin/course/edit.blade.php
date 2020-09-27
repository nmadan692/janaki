@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.course.partials.form',
                    $data=[
                        'form-action' => 'admin.course.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Course',
                        'button-text' => 'Update',
                        'course' => $course
                    ]
        )
    </div>
@endsection
