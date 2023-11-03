@extends('layouts.main')
@section('container')
    <script src="{{ asset('js/myScript/html5-qrcode.js') }}" type="text/javascript"></script>
    <h1>Home</h1>
    <div class="card">
        <div class="card-header">
            <h2>Qr-scanner</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <form id="image-form" action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <video id="camera" autoplay style="display: none;"></video>
                        <input type="file" id="imageInput" accept="image/*" class="form-input">
                        <div class="input-group">
                            <select id="camera-select" class="form-select"></select>
                            <button id="capture-button" class="btn btn-secondary" type="button">
                                <i class="bi bi-camera"></i>
                            </button>
                        </div>
                        <button id="submit-button" class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-4">
                    <img id="captured-image" style="display: none;">
                </div>
                <div class="col-4">
                    <div id="reader" width="100px"></div>
                </div>

                <div class="col-12">
                    <form method="post" action="{{ route('uploadImage') }}">
                        @csrf
                        <canvas id="gambarCanvas" width="400" height="300"></canvas>
                        <button type="button" id="ambilGambarButton">Ambil Gambar</button>
                        <button type="submit">Simpan Gambar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <img src="{{ asset('img/nisa.png') }}" alt="" srcset=""> --}}
    {{-- <video src="" id="scanner"></video> --}}


    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                // qrbox: {
                //     width: 250,
                //     height: 250
                // }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
