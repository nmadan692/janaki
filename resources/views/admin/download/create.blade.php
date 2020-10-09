@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <div class="m-content">
            @include('admin.download.partials.form',
                        $data=[
                            'form-action' => 'admin.download.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Course Material',
                            'button-text' => 'Save',
                            'download' => null
                        ]
            )
        </div>
    </div>
@endsection
