@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.teacher.partials.form',
                    $data=[
                        'form-action' => 'admin.teacher.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Teacher',
                        'button-text' => 'Update',
                        'teacher' => $teacher
                    ]
        )
    </div>
@endsection
