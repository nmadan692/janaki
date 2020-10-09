@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.download.partials.form',
                    $data=[
                        'form-action' => 'admin.download.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Course Material',
                        'button-text' => 'Update',
                        'download' => $download
                    ]
        )
    </div>
@endsection
