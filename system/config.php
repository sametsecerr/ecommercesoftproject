<?php
session_start();
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ob_start('compress');

date_default_timezone_set('Europe/Istanbul');

try {
    $db = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print_r($e->getMessage());
}

$query = $db->prepare("SELECT * FROM ayarlar LIMIT :limit");
$query->bindValue(':limit', 1, PDO::PARAM_INT);
$query->execute();

if ($query->rowCount() > 0) {
    $row = $query->fetch(PDO::FETCH_OBJ);
    $site = $row->site_url;
    $site_baslik = $row->site_baslik;
    if ($row->site_durum != 1) {
        if (basename($_SERVER['PHP_SELF']) !== 'maintenance.php') {
            go($site . 'maintenance.php');
            die();
        }
    }
    #consts
    define('site', $site);
    define('baslik', $site_baslik);

    #consts
}
?>
