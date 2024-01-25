@extends('layouts.main')
@section('container')
    <table class="table table-sm table-striped table-hover table-bordered" id="userAccmenuTable">
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
        {{-- <tbody>
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
        </tbody> --}}
        <!-- resources/views/upload.blade.php -->
        <div class="row mb-4">
            <div class="col-4">
                <div class="input-group" style="display: flex;justify-content:space-between">
                    <form action="{{ route('uploadExcel') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="excel_file" accept=".xls, .xlsx">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
            <div class="col-8"></div>
        </div>

    </table>
@endsection
