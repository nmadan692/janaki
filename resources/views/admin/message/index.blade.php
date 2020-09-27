@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Message From MD'" :table-id="'message'"
                            :theads="[
                            'ID',
                            'Message From MD',
                            'Action']"
                            :button="['route' => 'admin.message.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"
                            :url="'/admin/message/list'"
                            columns="[
                            { data: 'id', name: 'id' },
                            { data: 'message_from_md', name: 'message_from_md' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>

@endsection
