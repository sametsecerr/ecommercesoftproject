<?php

$meta = [
    'title' => 'Register',
    'description' => 'This is the register page',
    'keywords' => 'Register, register page',
    'author' => 'YES',
    'robots' => 'index, follow',
];

require_once './inc/header.php';
//if($_SESSION['login'] == sha1(md5(IP() . $mail))){
//    go(site);
//}
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
                    <div class="register-block py-5">
                        <a href="" class="register-page-logo">
                            <img src="public/images/brand_logo.svg" alt="Logo">
                        </a>
                        <h3 class="register-title">Welcome to the Ecomus</h3>
                        <p class="register-text">Please login to your account.</p>
                        <div class="w-100 d-flex justify-content-center align-items-center">
                            <a href="login" class="d-block text-center pt-2 pb-3 text-black">
                                Already have account ?
                            </a>
                        </div>
                        <form id="registerForm" onsubmit="return false;" action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3 d-flex align-items-center justify-content-between gap-1">
                                <div class="w-50">
                                    <label for="fullname" class="se-form-label">*Name:</label>
                                    <input type="text" name="name" class="se-input-text" id="name" placeholder="Enter your name">
                                </div>
                                <div class="w-50">
                                    <label for="fullname" class="se-form-label">*Surname:</label>
                                    <input type="text" name="surname" class="se-input-text" id="surname" placeholder="Enter your name">
                                </div>
                              
                            </div>
                            <div class="mb-3 d-flex align-items-center justify-content-between gap-1">
                               <div class="w-50">
                               <label for="email" class="se-form-label">*Email:</label>
                               <input type="email" name="email" class="se-input-text" id="email" placeholder="Enter your email">
                               </div>
                                <div class="w-50">
                                    <label for="phone" class="se-form-label">*Phone:</label>
                                    <input type="tel" name="phone" class="se-input-text" id="phone" placeholder="Enter your phone">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="se-form-label">*Password:</label>
                                <input type="password" name="password" class="se-input-text" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="se-form-label">*Confirm Password:</label>
                                <input type="password" name="confirm_password" class="se-input-text" id="confirm_password" placeholder="Enter your password again">
                            </div>
                            <div class="w-100 d-flex align-items-center gap-2 mb-2">
                                <input type="checkbox" name="remember" class="se-input-checkbox bounce" id="remember">
                                <label for="remember" class="se-form-label mb-0">I agree to the <a href="">terms and conditions</a></label>
                            </div>
                            <div class="w-100 d-flex align-items-center gap-2 ">
                                <input type="checkbox" name="remember" class="se-input-checkbox bounce" id="remember">
                                <label for="remember" class="se-form-label mb-0">I want to receive news and special offers</label>
                            </div>
                            <button type="submit" name="register_button" class="btn_v1 mt-3 w-100" id="sendButton" onclick="registerbutton()">
                                Create my account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





<!--<h1>Day #4 Registration Form.</h1>-->
<!--<div class="content">-->
<!--	<section>-->
<!--		<div class="register-wrapper">-->
<!--		<div class="register-block">-->
<!--		<h3 class="register-title">Create an account</h3>-->
<!--			<p>Create an account using the form below.</p>-->
<!--			<form action="" method="POST" onsubmit="return false;" id="registerForm">-->
<!--            <input type="text" name="name" placeholder="Enter your name"/>-->
<!--            <input type="text" name="surname" placeholder="Enter your surname"/>-->
<!--			<input type="email" name="email" placeholder="Enter your email"/>-->
<!--			<input type="password" name="password" placeholder="Enter your password" />-->
<!--            <input type="password" name="confirm_password" placeholder="Enter your password again" />-->
<!--            <input type="tel" name="phone" placeholder="Enter your phone number" />-->
<!--			<button type="submit" name="register_button" id="sendButton" onclick="registerbutton()">-->
<!--                Create my account-->
<!--            </button>-->
<!--			</form>-->
<!--		</div>-->
<!--		</div>-->
<!--	</section>-->
<!--</div>-->



<?php require_once './inc/footer.php'; ?>