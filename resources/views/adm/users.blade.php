@extends('layouts.main')
@section('container')
    <table class="table table-sm table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Section</th>
                <th>Nik</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($users as $u)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->section_cd }}</td>
                    <td>{{ $u->nik }}</td>
                    <td>
                        <a href="#" class="btn btn-sn btn-warning">Edit</a>
                        <a href="#" class="btn btn-sn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
