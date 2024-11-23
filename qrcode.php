<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork QR Codes</title>
    <style>
        .qr-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .qr-item {
            text-align: center;
            margin: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .qr-item canvas {
            margin-bottom: 10px;
        }

        .qr-item h3 {
            margin: 10px 0 5px;
            font-size: 1.2em;
        }

        .qr-item a {
            display: block;
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }

        .qr-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Artwork QR Codes</h1>
    <div id="qr-container" class="qr-container"></div>

    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <script src="qrcode.js"></script>
</body>
</html>
