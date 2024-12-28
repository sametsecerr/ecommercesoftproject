<?php
session_start();

// Session'ları temizle
session_unset();
session_destroy();

// JSON response döndür
header('Content-Type: application/json');
echo json_encode(['status' => 'success', 'message' => 'Başarıyla çıkış yapıldı']);