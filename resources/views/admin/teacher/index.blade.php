@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Teacher'" :table-id="'teacher'"
                            :theads="[
                            'ID',
                            'Name',
                            'Subject',
                            'Action']"

                            :button="['route' => 'admin.teacher.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"

                            :url="'/admin/teacher/list'"
                            columns="[
                            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false, width: '5%'},
                            { data: 'name', name: 'name' },
                            { data: 'subject', name: 'subject' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>
@endsection
