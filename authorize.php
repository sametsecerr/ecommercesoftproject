<?php
// CORS ayarları
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Authorization, Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';
use \Firebase\JWT\JWT;

// Debug için
error_log("Gelen Headers: " . print_r(getallheaders(), true));
error_log("SERVER variables: " . print_r($_SERVER, true));

$key = "36e9ced56e997200e708c4c230bb568977ede0d6c39ecdb01cd574f4f5c48fbe";

// Apache için özel header kontrolü
$headers = getallheaders();
$authHeader = null;

// Farklı header formatlarını kontrol et
if (isset($headers['Authorization'])) {
    $authHeader = $headers['Authorization'];
} elseif (isset($headers['authorization'])) {
    $authHeader = $headers['authorization'];
} elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
} elseif (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
    $authHeader = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
}

error_log("Auth Header: " . $authHeader); // Debug için

if ($authHeader) {
    $jwt = str_replace('Bearer ', '', $authHeader);
    try {
        $decoded = JWT::decode($jwt, new \Firebase\JWT\Key($key, 'HS256'));
        $_SESSION['user_id'] = $decoded->user_id;
        // Debug için
        file_put_contents('debug.log', "Token decoded successfully\n", FILE_APPEND);
    } catch (Exception $e) {
        file_put_contents('debug.log', "Token decode error: " . $e->getMessage() . "\n", FILE_APPEND);
        header('HTTP/1.0 401 Unauthorized');
        echo json_encode(['error' => 'Token geçersiz: ' . $e->getMessage()]);
        exit;
    }
} else {
    file_put_contents('debug.log', "No auth header found\n", FILE_APPEND);
    header('HTTP/1.0 401 Unauthorized');
    echo json_encode(['error' => 'Token bulunamadı']);
    exit;
}

?>