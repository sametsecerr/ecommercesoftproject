<?php

$meta = [
    'title' => 'Login',
    'description' => 'This is the Login page',
    'keywords' => 'Login, Login page',
    'author' => 'YES',
    'robots' => 'index, follow',
];


require_once './inc/header.php';
if(isLogged()){
    if($_SESSION['login'] == sha1(md5(IP() . $_SESSION['mail']))){
        go("home");
    }
}
?>
<div class="navbar-placeholder"></div>
<section id="login_register_v1">
    <div class="w-100 h-100 row overflow-hidden">
        <div class="col-lg-6">
            <img class="w-100 h-100 object-fit-cover"
                 src="public/images/login_register.avif" alt="">
        </div>
        <div class="col-lg-6">
            <div class="w-100 h-100 d-flex align-items-center">
                <div class="login-block  py-5">
                    <a href="" class="login-page-logo">
                        <img src="public/images/brand_logo.svg" alt="Logo">
                    </a>
                    <h3 class="login-title">Welcome to the Ecomus</h3>
                    <p class="login-text">Please login to your account.</p>
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <a href="register" class="d-block text-center pt-2 pb-3 text-black">
                            Create new account ?
                        </a>
                    </div>
                    <form id="loginForm" onsubmit="return false;" action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="email" class="se-form-label">Email:</label>
                            <input type="email" name="email" class="se-input-text" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="se-form-label">Password:</label>
                            <input type="password" name="password" class="se-input-text" id="password" placeholder="Enter your password">
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <input type="checkbox" name="remember" class="se-input-checkbox bounce" id="remember">
                                <label for="remember" class="se-form-label mb-0">Remember me ?</label>
                            </div>
                            <a href="forgot-password" class="se-form-label">Forgot password ?</a>
                        </div>
                        <button type="submit" name="login_button" class="btn_v1 mt-3 w-100" id="loginSendButton" onclick="loginbutton()">
                            Login my account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once './inc/footer.php'; ?>