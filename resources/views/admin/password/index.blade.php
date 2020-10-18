@extends('admin.layouts.master')

@section('content')
    <div class="m-content">
        <x-tables.datatable :title="'Password'" :table-id="'password'"
                            :theads="[
                            'ID',
                            'Email',
                            'Password',
                            'Action']"

                            :url="'/admin/password/list'"
                            columns="[
                            {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false, width: '5%'},
                            { data: 'email', name: 'email' },
                            { data: 'password', name: 'password' },
                            { data: 'action', name: 'action', orderable: false, searchable: false }
                            ]">
        </x-tables.datatable>
    </div>
@endsection
