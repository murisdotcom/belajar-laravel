    // Fungsi untuk mengubah Data URL menjadi blob
    function dataURItoBlob(dataURI) {
        const byteString = atob(dataURI.split(',')[1]);
        const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
        const ab = new ArrayBuffer(byteString.length);
        const ia = new Uint8Array(ab);
        for (let i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }
        return new Blob([ab], { type: mimeString });
    }

    const video = document.getElementById('camera');
    const captureButton = document.getElementById('capture-button');
    const imageInput = document.getElementById('imageInput');
    const capturedImage = document.getElementById('captured-image');
    const submitButton = document.getElementById('submit-button');
    const cameraSelect = document.getElementById('camera-select');

    // Fungsi untuk menampilkan daftar perangkat kamera yang tersedia
    async function listCameras() {
        const devices = await navigator.mediaDevices.enumerateDevices();
        const videoDevices = devices.filter(device => device.kind === 'videoinput');

        videoDevices.forEach(device => {
            const option = document.createElement('option');
            option.value = device.deviceId;
            option.text = device.label || `Kamera ${cameraSelect.options.length + 1}`;
            cameraSelect.appendChild(option);
        });
    }

    // Tombol "Ambil Foto" akan menampilkan kamera
    captureButton.addEventListener('click', function () {
        const selectedDeviceId = cameraSelect.value;

        if (selectedDeviceId) {
            const constraints = {
                video: { deviceId: { exact: selectedDeviceId } }
            };

            navigator.mediaDevices
                .getUserMedia(constraints)
                .then(function (stream) {
                    video.srcObject = stream;
                    video.style.display = 'block'; // Tampilkan elemen video
                })
                .catch(function (error) {
                    console.error('Gagal mengakses kamera: ' + error);
                });
        }
    });

    // Menangkap gambar dari tampilan kamera
    captureButton.addEventListener('click', function () {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
        const imageUrl = canvas.toDataURL('image/jpeg'); // Simpan sebagai JPEG atau sesuai kebutuhan

        // Menampilkan hasil gambar
        capturedImage.src = imageUrl;
        capturedImage.style.display = 'block';

        // Menyimpan hasil gambar ke elemen input file (hidden)
        const blob = dataURItoBlob(imageUrl);
        const imageFile = new File([blob], 'photo.jpg', { type: 'image/jpeg' });
        imageInput.files = new FileList([imageFile]);

        // Tampilkan tombol "Submit" setelah hasil gambar ditampilkan
        submitButton.style.display = 'block';
    });

    // Tombol "Submit" akan mengirimkan form
    submitButton.addEventListener('click', function () {
        document.getElementById('image-form').submit();
    });



    // Memanggil fungsi listCameras untuk menampilkan daftar kamera
    listCameras();

