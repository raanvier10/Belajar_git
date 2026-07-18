<?php
// public/api/contact.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In a real app, you would process the POST data here and save it to the DB.
    // For this boilerplate, we'll just mock a success response.
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array
    
    // Simulate some validation or processing time
    sleep(1);

    if (isset($input['email']) && filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'success' => true,
            'message' => 'Pesan berhasil dikirim'
        ]);
    } else {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'errors' => ['email' => 'Format email tidak valid']
        ]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
