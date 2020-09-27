@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Notice'" :table-id="'notice'"
                            :theads="[
                            'ID',
                            'Notice',
                            'Status',
                            'Action']"
                            :button="['route' => 'admin.notice.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"
                            :url="'/admin/notice/list'"
                            columns="[
                            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false, width: '5%'},
                            { data: 'notice', name: 'notice' },
                            { data: 'status', name: 'status' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>
@endsection
