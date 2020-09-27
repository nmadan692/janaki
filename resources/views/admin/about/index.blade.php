@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'About'" :table-id="'about'"
                            :theads="[
                            'ID',
                            'About Us',
                            'Message From MD',
                            'Action']"
                            :button="['route' => 'admin.about.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"
                            :url="'/admin/about/list'"
                            columns="[
                            { data: 'id', name: 'id' },
                            { data: 'about_us', name: 'about_us' },
                            { data: 'message_from_md', name: 'message_from_md' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>

@endsection
