<?php
// Load JSON data
$data = json_decode(file_get_contents('artworks.json'), true);

// Get the artwork title from the query string
$title = isset($_GET['title']) ? $_GET['title'] : null;

// If no title is provided, display an error
if (!$title) {
    echo "No title provided.";
    exit;
}

// Find the artwork with the matching title (case-insensitive)
$artwork = null;
foreach ($data as $item) {
    // print_r(strcasecmp($item['title'], $title));
    if (strcasecmp($item['title'], $title) === 0) { // Case-insensitive comparison
        $artwork = $item;
        break;
    }
}

// If no artwork found, display an error
if (!$artwork) {
    echo "Artwork not found.";
    exit;
}

// Display the artwork details (for demonstration)
// header('Content-Type: application/json');
// echo json_encode($artwork, JSON_PRETTY_PRINT);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($artwork['title']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .video-container {
            display: flex;
            justify-content: center;
            margin-bottom: 15px;
        }

        video {
            max-width: 100%;
            border-radius: 10px;
        }

        .voice-option, .controls {
            margin: 20px 0;
        }

        .voice-option label, .controls button {
            display: block;
            margin-bottom: 10px;
            text-align: center;
        }

        select, button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        select {
            background-color: #f3f3f3;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        textarea {
            display: none;
        }

        audio {
            display: none;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 22px;
            }

            button, select {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=GxCB34c0"></script>
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($artwork['title']); ?></h1>

        <div class="video-container">
            <video id="video" src="videos/<?php echo htmlspecialchars($artwork['video']); ?>"></video>
        </div>

        <audio id="sound" src="audios/<?php echo htmlspecialchars($artwork['audio']); ?>" type="audio/m4a"></audio>

        <textarea id="text"><?php echo htmlspecialchars($artwork['description']); ?></textarea>

        <div class="voice-option">
            <label for="voice">Choose Voice:</label>
            <select id="voice">
                <option value="UK English Female">UK English Female</option>
                <option value="UK English Male">UK English Male</option>
                <option value="US English Female">US English Female</option>
                <option value="Australian Female">Australian Female</option>
                <option value="French Female">French Female</option>
                <option value="Spanish Female">Spanish Female</option>
                <option value="Hindi Female">Hindi Female</option>
                <option value="Chinese Female">Chinese Female</option>
            </select>
        </div>

        <div class="controls">
            <button onclick="speakText()">Start</button>
            <button onclick="pauseSpeech()">Pause</button>
            <button onclick="resumeSpeech()">Resume</button>
        </div>
    </div>

    <script>
        function speakText() {
            const text = document.getElementById('text').value.trim();
            const voice = document.getElementById('voice').value;
            const video = document.getElementById('video');
            const sound = document.getElementById('sound');

            if (!text) {
                alert('No text available to speak!');
                return;
            }
            sound.currentTime = 0;
            sound.play();
            video.play();
            

            responsiveVoice.speak(text, voice, {
                pitch: 1,
                rate: 1,
                volume: 1,
                onstart: () => console.log('Speech started'),
                onend: () => {
                    console.log('Speech ended');
                    video.pause();
                    sound.pause();
                    sound.currentTime = 0;
                },
                onerror: (err) => console.error('Speech error:', err),
            });
        }

        function pauseSpeech() {
            responsiveVoice.pause();
            document.getElementById('video').pause();
            document.getElementById('sound').pause();
        }

        function resumeSpeech() {
            responsiveVoice.resume();
            document.getElementById('video').play();
            document.getElementById('sound').play();
        }
    </script>
</body>
</html>
