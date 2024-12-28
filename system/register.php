<?php
require_once './function.php';
if($_POST){
    $name = post('name');
    $surname = post('surname');
    $email = post('email');
    $password = post('password');
    $confirm_password = post('confirm_password');
    $phone = post('phone');
    $crypt_password = password_hash($password, PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($email) || empty($password) || empty($confirm_password) || empty($phone)){
        echo "empty";
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "format";
        }else{
            if($password !== $confirm_password){
                echo "match";
            }else{
                
                $already = $db->prepare("SELECT * FROM musteriler WHERE musteri_mail = :email");
                $already->execute([':email' => $email]);
                if($already->rowCount() > 0){
                    echo "already";
                }else{
                    $register = $db->prepare("INSERT INTO musteriler (musteri_ad, musteri_soyad, musteri_mail, musteri_sifre, musteri_telefon) VALUES (:name, :surname, :email, :password, :phone)");
                    $register->execute([':name' => $name, ':surname' => $surname, ':email' => $email, ':password' => $crypt_password, ':phone' => $phone]);
                    if($register->rowCount() > 0){
                        echo "success";
                    }else{
                        echo "error";
                    }
                }

            }
        }
    }
}


?>