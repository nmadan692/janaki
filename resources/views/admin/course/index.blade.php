@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Courses'" :table-id="'course'"
                            :theads="[
                            'ID',
                            'Title',
                            'Status',
                            'Action']"
                            :button="['route' => 'admin.course.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"
                            :url="'/admin/course/list'"
                            columns="[
                            { data: 'id', name: 'id' },
                            { data: 'name', name: 'name' },
                            { data: 'status', name: 'status' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>

@endsection
