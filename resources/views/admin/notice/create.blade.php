@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <div class="m-content">
            @include('admin.notice.partials.form',
                        $data=[
                            'form-action' => 'admin.notice.store',
                            'form-method' => 'post',
                            'form-title' => 'Create Notice',
                            'button-text' => 'Save',
                            'notice' => null
                        ]
            )
        </div>
    </div>
@endsection
