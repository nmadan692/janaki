@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        @include('admin.about.partials.form',
                    $data=[
                        'form-action' => 'admin.about.update',
                        'form-method' => 'patch',
                        'form-title' => 'Edit About Us',
                        'button-text' => 'Update',
                        'about' => $about
                    ]
        )
    </div>
@endsection
