<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live QR Code Scanner</title>
    <style>
        #video {
            width: 100%;
            height: auto;
            max-width: 600px;
        }
        #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
    <h1>Verify the Status</h1>
    <video id="video" autoplay></video>
    <div id="result"></div>

    <script src="https://cdn.jsdelivr.net/npm/jsqr"></script>
    <script>
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        .then(function(stream) {
            const video = document.getElementById('video');
            video.srcObject = stream;
            video.play();
        })
        .catch(function(error) {
            console.error('Error accessing the camera: ', error);
        });

        const video = document.getElementById('video');
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        setInterval(() => {
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);
                if (code) {
                    document.getElementById('result').innerText = 'URL: ' + code.data;
                    window.location.href = code.data; // Redirect to the extracted URL
                } else {
                    document.getElementById('result').innerText = 'No QR code found.';
                }
            }
        }, 100);
    </script>
    </center>
</body>
</html>
