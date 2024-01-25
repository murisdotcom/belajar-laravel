@extends('layouts.main')
@section('container')
    <table class="table table-sm table-striped table-hover table-bordered" id="usersTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Section</th>
                <th>Nik</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        {{-- <tbody>
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
        </tbody> --}}
    </table>

    {{-- <video id="video" width="640" height="480" autoplay></video>
    <button onclick="switchCamera()">Switch Camera</button>

    <script>
        let currentCamera = 'environment'; // Default to back camera

        async function startCamera() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: currentCamera
                    }
                });
                const videoElement = document.getElementById('video');
                videoElement.srcObject = stream;
            } catch (error) {
                console.error('Error accessing camera:', error);
            }
        }

        function switchCamera() {
            currentCamera = currentCamera === 'user' ? 'environment' : 'user';
            // Stop the current stream
            const videoElement = document.getElementById('video');
            const stream = videoElement.srcObject;
            const tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
            // Start the new camera
            startCamera();
        }

        // Start the camera when the page loads
        startCamera();
    </script> --}}
@endsection
