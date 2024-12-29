<?php
$meta = [
'title' => 'Wishlist',
'description' => 'This is the wishlist page',
'keywords' => 'wishlist, wishlist page',
'author' => 'YES',
'robots' => 'index, follow',
];
require_once './inc/header.php';
?>

<div class="navbar-placeholder"></div>
<section id="whislist_page_v1">
    <div class="whislist-title">
        <h1>Your Wishlist</h1>
    </div>
    <div class="se-container d-flex flex-column justify-content-center align-items-center">
        <div class="nowishItem">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="37" viewBox="0 0 40 37" fill="#ececec">
                <path d="M20.2 31.1L20 31.3L19.78 31.1C10.28 22.48 4 16.78 4 11C4 7 7 4 11 4C14.08 4 17.08 6 18.14 8.72H21.86C22.92 6 25.92 4 29 4C33 4 36 7 36 11C36 16.78 29.72 22.48 20.2 31.1ZM29 0C25.52 0 22.18 1.62 20 4.16C17.82 1.62 14.48 0 11 0C4.84 0 0 4.82 0 11C0 18.54 6.8 24.72 17.1 34.06L20 36.7L22.9 34.06C33.2 24.72 40 18.54 40 11C40 4.82 35.16 0 29 0Z" fill="#ececec"></path>
            </svg>
            <h3 class="wishlist-title">Wishlist is empty :( </h3>
            <p class="wishlist-text">You don't have any products in the wishlist yet. You will find a lot of interesting products on our "Shop page".</p>
            <a href="" class="btn_v2 mt-4">
                Return to shop
            </a>
        </div>
    </div>
</section>

<?php require_once './inc/footer.php'; ?>