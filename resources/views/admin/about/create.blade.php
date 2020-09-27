@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
            @include('admin.about.partials.form',
                        $data=[
                            'form-action' => 'admin.about.store',
                            'form-method' => 'post',
                            'form-title' => 'Create About Us',
                            'button-text' => 'Save',
                            'about' => null
                        ]
            )
    </div>
@endsection
