<?php

require_once './function.php';
require_once '../vendor/autoload.php';
use \Firebase\JWT\JWT;
$key = "36e9ced56e997200e708c4c230bb568977ede0d6c39ecdb01cd574f4f5c48fbe";

if($_POST){


    $email = post('email');
    $password = post('password');

    if(empty($email) || empty($password)){
        echo "empty";
    }else{
        $login = $db->prepare("SELECT * FROM musteriler WHERE musteri_mail = :email");
        $login->execute([':email' => $email]);
        $user = $login->fetch(PDO::FETCH_ASSOC);
        if($user){
            if (password_verify($password, $user['musteri_sifre'])) {

                $payload = [
                    'iss' => "localhost", // Token'ı oluşturan
                    'aud' => "localhost", // Token'ı alan
                    'iat' => time(), // Token oluşturulma zamanı
                    'exp' => time() + (60 * 60), // Token'ın geçerlilik süresi (örneğin, 1 saat)
                    'user_id' => $user['id'], // Kullanıcı ID'sini token'a ekliyoruz
                    'email' => $user['musteri_mail']
                ];

                $jwt = JWT::encode($payload, $key, 'HS256');
                
                // Session'a token'ı kaydet
                $_SESSION['token'] = $jwt;
                $_SESSION['login'] = sha1(md5(IP() . $user['musteri_mail']));
                $_SESSION['mail'] = $user['musteri_mail'];
                $_SESSION['logged'] = true;
                $_SESSION['name'] = $user['musteri_ad'];
                $_SESSION['surname'] = $user['musteri_soyad'];
                $_SESSION['phone'] = $user['musteri_telefon'];
                $_SESSION['address'] = $user['musteri_adres_1'];
                $_SESSION['address2'] = $user['musteri_adres_2'];
                $_SESSION['address3'] = $user['musteri_adres_3'];
                $_SESSION['city'] = $user['musteri_il'];
                $_SESSION['country'] = $user['musteri_ulke'];
                $_SESSION['zip'] = $user['musteri_posta_kodu'];



                
                header('Authorization: Bearer ' . $jwt);
                echo json_encode([
                    'status' => 'success',
                    'token' => $jwt,
                    'authorization' => 'Bearer ' . $jwt
                ]);
            } else {
                echo "password";
            }
        }
    }
}







?>