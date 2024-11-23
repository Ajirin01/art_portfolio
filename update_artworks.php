<?php
// Path to JSON file
$jsonFile = 'artworks.json';

// Read the JSON file
$artworks = json_decode(file_get_contents($jsonFile), true);

// Get the incoming artwork data
$input = json_decode(file_get_contents('php://input'), true);

if ($input && isset($input['id'])) {
    $updated = false;

    // Find the artwork by ID and update it
    foreach ($artworks as &$artwork) {
        if ($artwork['id'] === $input['id']) {
            $artwork = array_merge($artwork, $input);
            $updated = true;
            break;
        }
    }

    if ($updated) {
        // Overwrite the JSON file with the updated data
        file_put_contents($jsonFile, json_encode($artworks, JSON_PRETTY_PRINT));
        http_response_code(200);
        echo json_encode(['message' => 'Artwork updated successfully.']);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'Artwork not found.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Invalid input.']);
}
?>
