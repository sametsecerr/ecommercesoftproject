<?php
 require_once './system/function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?=$meta['description']?>">
        <meta name="keywords" content="<?=$meta['keywords']?>">
        <meta name="author" content="<?=$meta['author']?>">
        <meta name="robots" content="<?=$meta['robots']?>">
        <title><?=$meta['title']?></title>
        <link rel="stylesheet" href="/e-commerce/public/css/import.css" >
        <link rel="stylesheet" href="/e-commerce/public/css/custom.css" >
        <link rel="stylesheet" href="/e-commerce/public/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/e-commerce/public/blaze-slider/dist/blaze.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="/e-commerce/public/jquery/dist/jquery.min.js"></script>
        <script src="/e-commerce/public/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/e-commerce/public/blaze-slider/dist/blaze-slider.dev.js"></script>
        <script src="/e-commerce/public/blaze-slider/dist/blaze-slider.min.js"></script>
        <script src="/e-commerce/public/js/custom.js" defer></script>
    </head>
    <body class="">
        <nav id="nav_v1" data-hover="false" data-scroll="">
            <div class="se-container-full">
                <div class="se-main-nav">
                    <button class="open-sidebar d-flex align-items-center justify-content-center bg-transparent d-xl-none" title="Open mobile sidebar" >
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 16" fill="currentColor" width="24" height="16">
                            <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    <a href="/home" rel="nofollow" title="Ana sayfaya git" class="se-nav-brand-logo">
                        <img src="/e-commerce/public/images/brand_logo.svg" alt="">
                    </a>
                    <div class="se-nav-item-wrapper">
                        <ul class="se-nav-item-list">
                            <li class="se-nav-item">
                                <a href="/home" rel="nofollow" title="Go to Homepage">
                                    Home
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </a>
                                <div class="nav_dropdown dropdown_v1">
                                    <div class="se-container">
                                        <div class="nav_dropdown_content">
                                            <div class="product_lists">
                                                <ul class="product-list">
                                                    <li><strong>Category 1</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                </ul>
                                                <ul class="product-list">
                                                    <li><strong>Category 2</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>

                                                </ul>
                                                <ul class="product-list">
                                                    <li><strong>Category 3</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                </ul>
                                            </div>
                                            <div class="nav_category_images">
                                                <a href="" rel="nofollow" title="See new women collection">
                                                    <img src="/e-commerce/public/images/nav_img_item_1.webp" alt="">
                                                    <div class="nav_category_image_desc">
                                                        SEE MORE
                                                    </div>
                                                </a>
                                                <a href="" rel="nofollow" title="See new t-shirt collection">
                                                    <img src="/e-commerce/public/images/nav_img_item_2.webp" alt="">
                                                    <div class="nav_category_image_desc">
                                                        SEE MORE
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="se-nav-item">
                                <a href="/shop" rel="nofollow" title="Go to Shop">Shop</a>
                            </li>
                            <li class="se-nav-item">
                                <a href="/products" rel="nofollow" title="Go to Products">
                                    Products
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </a>
                                <div class="nav_dropdown dropdown_v1">
                                    <div class="se-container">
                                        <div class="nav_dropdown_content">
                                            <div class="product_lists">
                                                <ul class="product-list">
                                                    <li><strong>Category 1</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 1">Product 1</a></li>
                                                </ul>
                                                <ul class="product-list">
                                                    <li><strong>Category 2</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 2">Product 2</a></li>

                                                </ul>
                                                <ul class="product-list">
                                                    <li><strong>Category 3</strong></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                    <li><a href="" rel="nofollow" title="Product 3">Product 3</a></li>
                                                </ul>
                                            </div>
                                            <div class="nav_category_images">
                                                <a href="" rel="nofollow" title="See new women collection">
                                                    <img src="/e-commerce/public/images/nav_img_item_1.webp" alt="">
                                                    <div class="nav_category_image_desc">
                                                        SEE MORE
                                                    </div>
                                                </a>
                                                <a href="" rel="nofollow" title="See new t-shirt collection">
                                                    <img src="/e-commerce/public/images/nav_img_item_2.webp" alt="">
                                                    <div class="nav_category_image_desc">
                                                        SEE MORE
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="se-nav-item">
                                <a href="/pages" rel="nofollow" title="Go to Pages">Pages</a>
                            </li>
                            <li class="se-nav-item">
                                <a href="/blog" rel="nofollow" title="Go to Blog">Blog</a>
                            </li>
                            <li class="se-nav-item">
                                <a href="/buynow" rel="nofollow" title="Go to Buy">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                    <div class="se-nav-appearances">
                        <button class="se-nav-search-bar" title="Search Bar">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 18 18" fill="currentColor" width="18" height="18">
                                <path d="M17.7241 16.1932L13.6436 12.1127C14.626 10.8049 15.1563 9.21299 15.1546 7.57728C15.1546 3.39919 11.7554 0 7.57728 0C3.39919 0 0 3.39919 0 7.57728C0 11.7554 3.39919 15.1546 7.57728 15.1546C9.21299 15.1563 10.8049 14.626 12.1127 13.6436L16.1932 17.7241C16.3998 17.9088 16.6692 18.0073 16.9461 17.9996C17.2231 17.9918 17.4865 17.8783 17.6824 17.6824C17.8783 17.4865 17.9918 17.2231 17.9996 16.9461C18.0073 16.6692 17.9088 16.3998 17.7241 16.1932ZM2.16494 7.57728C2.16494 6.50682 2.48237 5.4604 3.07708 4.57034C3.6718 3.68029 4.51709 2.98657 5.50607 2.57693C6.49504 2.16728 7.58328 2.0601 8.63318 2.26893C9.68307 2.47777 10.6475 2.99325 11.4044 3.75018C12.1613 4.5071 12.6768 5.47149 12.8856 6.52138C13.0945 7.57128 12.9873 8.65952 12.5776 9.64849C12.168 10.6375 11.4743 11.4828 10.5842 12.0775C9.69416 12.6722 8.64774 12.9896 7.57728 12.9896C6.14237 12.9879 4.76672 12.4171 3.75208 11.4025C2.73744 10.3878 2.16666 9.01219 2.16494 7.57728Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <a class="se-nav-account" href="<?= isLogged() ? "account" : "login" ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 64 64" fill="currentColor"><path d="M56,64V57.48A8.43,8.43,0,0,0,47.56,49H16.44A8.43,8.43,0,0,0,8,57.48V64H.9V57.48A15.53,15.53,0,0,1,16.44,41.94H47.56A15.53,15.53,0,0,1,63.1,57.48V64Zm-23.47-27a18.66,18.66,0,0,1-13.11-5.43,18.54,18.54,0,0,1,0-26.22A18.53,18.53,0,0,1,51.07,18.51,18.52,18.52,0,0,1,32.54,37.05Zm0-30a11.44,11.44,0,1,0,8.09,3.35A11.36,11.36,0,0,0,32.54,7.07Z"></path></svg>
                        </a>
                        <?php 
                        if(isLogged()){
                            echo '<a href="javascript:void(0);" onclick="logout();" class="logout-link">Çıkış Yap</a>';
                        }
                        ?> 
                        <a href="/wishlist" class="se-nav-favorite d-none d-md-flex" title="My Favorites">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="currentColor" width="20" height="18">
                                <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                            </svg>
                            <div class="badge-top-right">
                                10
                            </div>
                        </a>
                        <button class="se-nav-shopping-bag" title="Shopping Bar">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="18">
                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                            </svg>                    
                            <div class="badge-top-right">
                                24
                            </div>
                        </button>
                    </div>
                </div>
                <div class="se-mobile-sidebar-variant-1" data-show="false">
                    <div class="mobile-sidebar-wrapper" data-show="false">
                        <button class="close-sidebar" title="Close Sidebar">
                            <svg role="presentation" fill="none" focusable="false" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M16 1.4L14.6 0L8 6.6L1.4 0L0 1.4L6.6 8L0 14.6L1.4 16L8 9.4L14.6 16L16 14.6L9.4 8L16 1.4Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div class="mobile-sidebar-items">
                            <div class="mobile-nav-item">
                                <button>
                                    Home
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </button>
                                <ul class="mobile-nav-ul">
                                    <li>
                                        <a href="">İçerik 1</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 2</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 3</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 4</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 5</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 6</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 7</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-item">
                                <button>
                                    Shop
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </button>
                                <ul class="mobile-nav-ul">
                                    <li>
                                        <a href="">İçerik 1</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 2</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 3</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 4</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 5</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-item">
                                <button>
                                    Products
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </button>
                                <ul class="mobile-nav-ul">
                                    <li>
                                        <a href="">İçerik 1</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 2</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 3</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 4</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 5</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 6</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 7</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-item">
                                <button>
                                    Pages
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none" width="10" height="7"><path d="M10 1.24243L5 6.24243L-2.18557e-07 1.24243L0.8875 0.354932L5 4.46743L9.1125 0.354931L10 1.24243Z" fill="#000"></path></svg>
                                </button>
                                <ul class="mobile-nav-ul">
                                    <li>
                                        <a href="">İçerik 1</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 2</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 3</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 4</a>
                                    </li>
                                    <li>
                                        <a href="">İçerik 5</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-nav-item">
                                <button class="single-item">
                                    <a href="">Blog</a>
                                </button>
                            </div>
                            <div class="mobile-nav-item">
                                <button class="single-item">
                                    <a href="">Buy Now</a>
                                </button>
                            </div>
                        </div>
                        <div class="mobile-nav-buttons">
                            <a href="" class="mobile-wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="currentColor" width="20" height="18">
                                    <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                </svg>
                                Wishlist
                            </a>
                            <a href="" class="mobile-search">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 18 18" fill="currentColor" width="18" height="18">
                                    <path d="M17.7241 16.1932L13.6436 12.1127C14.626 10.8049 15.1563 9.21299 15.1546 7.57728C15.1546 3.39919 11.7554 0 7.57728 0C3.39919 0 0 3.39919 0 7.57728C0 11.7554 3.39919 15.1546 7.57728 15.1546C9.21299 15.1563 10.8049 14.626 12.1127 13.6436L16.1932 17.7241C16.3998 17.9088 16.6692 18.0073 16.9461 17.9996C17.2231 17.9918 17.4865 17.8783 17.6824 17.6824C17.8783 17.4865 17.9918 17.2231 17.9996 16.9461C18.0073 16.6692 17.9088 16.3998 17.7241 16.1932ZM2.16494 7.57728C2.16494 6.50682 2.48237 5.4604 3.07708 4.57034C3.6718 3.68029 4.51709 2.98657 5.50607 2.57693C6.49504 2.16728 7.58328 2.0601 8.63318 2.26893C9.68307 2.47777 10.6475 2.99325 11.4044 3.75018C12.1613 4.5071 12.6768 5.47149 12.8856 6.52138C13.0945 7.57128 12.9873 8.65952 12.5776 9.64849C12.168 10.6375 11.4743 11.4828 10.5842 12.0775C9.69416 12.6722 8.64774 12.9896 7.57728 12.9896C6.14237 12.9879 4.76672 12.4171 3.75208 11.4025C2.73744 10.3878 2.16666 9.01219 2.16494 7.57728Z" fill="currentColor"></path>
                                </svg>
                                Search
                            </a>
                        </div>
                        <div class="mobile-sidebar-help">
                            <a href="">Need Help ?</a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="" title="Adresimizi ulaşın">Address: <strong>1234 Fashion Street, Suite 567</strong></a>
                                </li>
                                <li>
                                    <a href="" title="E-mail adresimizle bize ulaşın">Email: <strong>info@fashionshop.com</strong></a>
                                </li>
                                <li>
                                    <a href="" title="Telefon ile bize ulaşın">Phone: <strong>(212)555-1234</strong></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-sidebar-footer">
                            <p>© 2024 Ecomus . All rights reserved. Tüm hakları saklıdır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


