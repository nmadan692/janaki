@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Abroad Study'" :table-id="'abroad'"
                            :theads="[
                            'ID',
                            'Country Name',
                            'Course',
                            'Action']"
                            :button="['route' => 'admin.abroad.create',
                                      'name' => 'Create',
                                      'icon' => 'la la-plus']"
                            :url="'/admin/abroad/list'"
                            columns="[
                            { data: 'id', name: 'id' },
                            { data: 'name', name: 'name' },
                            { data: 'course_name', name: 'course_name' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>

@endsection
