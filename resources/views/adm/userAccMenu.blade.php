@extends('layouts.main')
@section('container')
    <table class="table table-sm table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Form id</th>
                <th>Allow create</th>
                <th>Allow update</th>
                <th>Allow delete</th>
                <th>Allow print</th>
                <th>Allow conf</th>
                <th>Allow open</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($userAccMenu as $uam)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $uam->username }}</td>
                    <td>{{ $uam->form_id }}</td>
                    <td>{{ $uam->allow_create }}</td>
                    <td>{{ $uam->allow_update }}</td>
                    <td>{{ $uam->allow_delete }}</td>
                    <td>{{ $uam->allow_print }}</td>
                    <td>{{ $uam->allow_conf }}</td>
                    <td>{{ $uam->allow_open }}</td>
                    <td>
                        <a href="#" class="btn btn-sn btn-warning">Edit</a>
                        <a href="#" class="btn btn-sn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
