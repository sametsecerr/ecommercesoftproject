<?php require_once './system/function.php';
if($row->site_durum == 1){

go($site);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/css/maintenance.css">
    <title>Document</title>
</head>
<body>
<section>
        <div class="container">
            <div class="content">
                <div class="company">
                    <p>Lorem</p>
                    <p>Ipsum</p>
                </div>

                <h1 class="title">Launching soon!</h1>

                <div class="discription">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eligendi a illum aliquid dolore. Corporis ipsa tempora dignissimos in reiciendis, ab inventore. Facilis, praesentium quasi!
                    </p>
                </div>

                <div class="button">
                    <button type="button">NOTIFY ME</button>
                </div>

                <div class="icons">
                    <button><ion-icon name="logo-facebook"></ion-icon></button>
                    <button><ion-icon name="logo-instagram"></ion-icon></button>
                    <button><ion-icon name="logo-twitter"></ion-icon></button>
                </div>
            </div>
        </div>
    </section>

    <!-- JS for icons:Start -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- JS for icons:End -->
</body>
</html>

