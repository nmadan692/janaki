@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
            @include('admin.abroad.partials.form',
                        $data=[
                            'form-action' => 'admin.abroad.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Abroad',
                            'button-text' => 'Save',
                            'abroad' => null
                        ]
            )
    </div>
@endsection
