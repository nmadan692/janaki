@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.notice.partials.form',
                    $data=[
                        'form-action' => 'admin.notice.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit Notice',
                        'button-text' => 'Update',
                        'notice' => $notice
                    ]
        )
    </div>
@endsection
