<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Authorization, Content-Type');
header('Content-Type: application/json');

require_once '../vendor/autoload.php';
use \Firebase\JWT\JWT;

$key = "36e9ced56e997200e708c4c230bb568977ede0d6c39ecdb01cd574f4f5c48fbe";

$headers = getallheaders();
$authHeader = isset($headers['Authorization']) ? $headers['Authorization'] : 
             (isset($headers['authorization']) ? $headers['authorization'] : null);

if ($authHeader) {
    $jwt = str_replace('Bearer ', '', $authHeader);
    try {
        $decoded = JWT::decode($jwt, new \Firebase\JWT\Key($key, 'HS256'));
        echo json_encode(['status' => 'success', 'user_id' => $decoded->user_id]);
    } catch (Exception $e) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid token']);
    }
} else {
    http_response_code(401);
    echo json_encode(['error' => 'No token provided']);
}
