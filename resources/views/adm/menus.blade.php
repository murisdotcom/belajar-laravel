@extends('layouts.main')
@section('container')
    <table class="table table-sm table-striped table-hover table-bordered" id="menusTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Form id</th>
                <th>Form name</th>
                <th>Parent</th>
                <th>Url</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        {{-- <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($menus as $m)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $m->form_id }}</td>
                    <td>{{ $m->form_nm }}</td>
                    <td>{{ $m->parent }}</td>
                    <td>{{ $m->url }}</td>
                    <td>{{ $m->fa_icon }}</td>
                    <td>
                        <a href="#" class="btn btn-sn btn-warning">Edit</a>
                        <a href="#" class="btn btn-sn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody> --}}
    </table>
@endsection
