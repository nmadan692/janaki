@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.abroad.partials.form',
                    $data=[
                        'form-action' => 'admin.abroad.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Abroad',
                        'button-text' => 'Update',
                        'abroad' => $abroad
                    ]
        )
    </div>
@endsection
