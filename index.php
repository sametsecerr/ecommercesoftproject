<?php
require_once './inc/header.php';

$meta = [
    'title' => 'Home',
    'description' => 'This is the home page',
    'keywords' => 'home, homepage, landing page',
    'author' => 'YES',
    'robots' => 'index, follow',
];

/*if(!isLogged()){
    header('Location: ./login');
    exit;
}*/

?>

<section id="landing_carousel_v1">
    <div class="se-container-full">
        <div class="landing_carousel blaze-slider">
            <div class="blaze-track-container">
                <div class="blaze-track">
                    <div class="blaze-slide item active">
                        <img src="./public/images/landing_slider_item_1.webp" alt="">
                        <div class="carousel-content se-container">
                            <h3 class="carousel-title">Glamorous Gram</h3>
                            <p class="carousel-desc">Get your code and start shopping!</p>
                            <a href="" class="carousel-shop-btn" rel="nofollow" title="Shop Now">
                                Shop Now
                            </a>
                        </div>
                    </div>
                    <div class="blaze-slide item">
                        <img src="./public/images/landing_slider_item_2.webp" alt="">
                        <div class="carousel-content se-container">
                            <h3 class="carousel-title">Glamorous Gram</h3>
                            <p class="carousel-desc">Get your code and start shopping!</p>
                            <a href="" class="carousel-shop-btn" rel="nofollow" title="Shop Now">
                                Shop Now
                            </a>
                        </div>
                    </div>
                    <div class="blaze-slide item">
                        <img src="./public/images/landing_slider_item_3.webp" alt="">
                        <div class="carousel-content se-container">
                            <h3 class="carousel-title">Glamorous Gram</h3>
                            <p class="carousel-desc">Get your code and start shopping!</p>
                            <a href="" class="carousel-shop-btn" rel="nofollow" title="Shop Now">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="main_paige_marquee">
        <div class="marquee">
        <span class="d-flex align-items-center fs-3 pe-5">
            ⚡ Spring Clearance Event: Save Up to 70%
        </span>
        <span class="d-flex align-items-center fs-3 pe-5">
            ⚡ Spring Clearance Event: Save Up to 70%
        </span>
        <span class="d-flex align-items-center fs-3 pe-5">
            ⚡ Spring Clearance Event: Save Up to 70%
        </span>
        <span class="d-flex align-items-center fs-3 pe-5">
            ⚡ Spring Clearance Event: Save Up to 70%
        </span>
    </div>
</section>
<section id="main_category_carousel_v1">
    <div class="se-container-full">
        <div class="main-category-carousel blaze-slider">
            <div class="d-flex align-items-center gap-3 mb-2">
                <div class="blaze-navs">
                    <button class="blaze-prev disabled" title="See previous categories">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" width="7" height="11">
                            <path d="M5.5 11L0 5.5L5.5 0L6.47625 0.97625L1.9525 5.5L6.47625 10.0238L5.5 11Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    <button class="blaze-next" title="See next categories">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" width="7" height="11">
                            <path d="M1.5 11L7 5.5L1.5 0L0.52375 0.97625L5.0475 5.5L0.52375 10.0238L1.5 11Z" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
                <h3 class="fs-5 fw-medium mb-0">
                    SHOP BY CATEGORY
                </h3>
            </div>
            <div class="blaze-container">
                <div class="blaze-track-container">
                    <div class="blaze-track">
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_1.webp" alt="">
                            </div>
                            <div class="item-content">
                                Clothing
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_2.webp" alt="">
                            </div>
                            <div class="item-content">
                                Sunglasses
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_3.webp" alt="">
                            </div>
                            <div class="item-content">
                                Bags
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_4.webp" alt="">
                            </div>
                            <div class="item-content">
                                Fashion
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_5.webp" alt="">
                            </div>
                            <div class="item-content">
                                Accesories
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_1.webp" alt="">
                            </div>
                            <div class="item-content">
                                Clothing
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_2.webp" alt="">
                            </div>
                            <div class="item-content">
                                Sunglasses
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_3.webp" alt="">
                            </div>
                            <div class="item-content">
                                Bags
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_4.webp" alt="">
                            </div>
                            <div class="item-content">
                                Fashion
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="item blaze-slide" title="Go to category">
                            <div class="item-img">
                                <img loading="lazy" src="./public/images/category_5.webp" alt="">
                            </div>
                            <div class="item-content">
                                Accesories
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                    <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="main_whos_us">
    <div class="se-container">
        <div class="row w-100 mx-auto">
            <div class="col-12 col-lg-6">
                <div class="us-images">
                    <div class="us-img-1 img-wrapper-animation-1">
                        <img loading="lazy" src="./public/images/us_1.webp" alt="">
                    </div>
                    <div class="us-img-2 img-wrapper-animation-1">
                        <img loading="lazy" src="./public/images/us_2.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0 p-auto ps-lg-5 d-flex align-items-center align-items-lg-start flex-column justify-content-center">
                <h4 class="fs-3">OUR MISSION</h4>
                <h2 class="fs-1 mt-1">Made In Canada</h2>
                <p class="mt-3 fs-6 lh-lg w-100 w-lg-80 text-center text-lg-start">
                    We're here to help you have a good day. We do this by creating products that enrich your life, with concern for people and our earth.
                    <br>
                    <br>
                    There are very few companies making sneakers in Canada. In order for us to offer sneakers we needed a little help from our friends. We call this our Friendship Manufacturing Initiative. We partnered with a Chinese factory to offer our sneaker designs.
                </p>
                <a href="#" class="mt-3 btn_v1" title="Learn more about us!">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
<section id="main_trend_products_v1">
    <div class="se-container">
        <h3 class="text-center fs-1">Best Seller</h3>
        <p class="text-center fs-6 mt-3 px-2">Shop the Latest Styles: Stay ahead of the curve with our newest arrivals</p>
        <div class="row mt-5 main-trend-products w-100 mx-auto p-0 blaze-slider">
            <div class="blaze-container">
                <div class="blaze-track-container">
                    <div class="blaze-track">
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity discount">
                                        -39%
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity summerSale">
                                        YAZ İNDİRİMİ !
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity campaign">
                                        FIRSAT ÜRÜNÜ
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productDiscountPercentage">-39%</span>
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity discount">
                                        -39%
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity summerSale">
                                        YAZ İNDİRİMİ !
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blaze-slide px-2 py-3">
                            <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="" title="See our product" class="product-img-link">
                                        <img loading="lazy" src="./public/images/product_1.webp" alt="" class="rounded productItemImg productItemImg1">
                                        <img loading="lazy" src="./public/images/product_5.webp" alt="" class="rounded productItemImg productItemImg2">
                                    </a>
                                    <div class="productOpportunity campaign">
                                        FIRSAT ÜRÜNÜ
                                    </div>
                                    <div class="product-add-basket">
                                        <button class="productItemButton shop" title="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 17 18"  fill="currentColor" width="17" height="16">
                                                <path d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"></path>
                                            </svg>
                                        </button>
                                        <div class="productSizes">
                                            <button title="product size add" class="productSize" data-size="XS">XS</button>
                                            <button title="product size add" class="productSize" data-size="S">S</button>
                                            <button title="product size add" class="productSize" data-size="M">M</button>
                                            <button title="product size add" class="productSize" data-size="L">L</button>
                                            <button title="product size add" class="productSize" data-size="XL">XL</button>
                                        </div>
                                    </div>
                                    <button class="productItemButton favorite" title="Add to Wishlist" >
                                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 18" fill="var(--hover-color)" width="20" height="18">
                                            <path d="M9.90736 15.2534L9.80926 15.3515L9.70136 15.2534C5.04196 11.0256 1.96185 8.22997 1.96185 5.3951C1.96185 3.43324 3.43324 1.96185 5.3951 1.96185C6.90572 1.96185 8.37711 2.94278 8.897 4.27684H10.7215C11.2414 2.94278 12.7128 1.96185 14.2234 1.96185C16.1853 1.96185 17.6567 3.43324 17.6567 5.3951C17.6567 8.22997 14.5766 11.0256 9.90736 15.2534ZM14.2234 0C12.5166 0 10.8785 0.79455 9.80926 2.04033C8.74005 0.79455 7.10191 0 5.3951 0C2.37384 0 0 2.36403 0 5.3951C0 9.09319 3.33515 12.1243 8.38692 16.7052L9.80926 18L11.2316 16.7052C16.2834 12.1243 19.6185 9.09319 19.6185 5.3951C19.6185 2.36403 17.2447 0 14.2234 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="productItemDetails">
                                    <a href="" title="See our distributor" class="productItemDistributor">Ecomus</a>
                                    <a href="" title="See our product" class="productItemTitle">Jersey Thong Body</a>
                                    <div class="productItemPrice">
                                        <span class="productDiscountPercentage">-39%</span>
                                        <span class="productItemOriginalPrice">$99.00</span>
                                        <span class="productItemDiscountPrice">$59.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="main_breeze_v1">
    <div class="se-container">
        <div class="row w-100 mx-auto">
            <div class="col-12 col-md-6 p-0">
                <div class="breeze-content">
                    <h3 class="fs-1 text-white">Breeze <br> Beachcomber</h3>
                    <p class="fs-6 mt-3 text-white lg-lg">The Breeze Collection is a breath of fresh air. It's a collection of light, airy, and breathable fabrics that are perfect for the warmer months.</p>
                    <a title="Shop Now" href="#" class="mt-3 btn_v1_white">Shop Now</a>
                </div>
            </div>
            <div class="col-12  col-md-6 p-0">
                <div class="img-wrapper-animation-1 h-100">
                    <img loading="lazy" src="./public/images/breeze.webp" alt="" class="h-100">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="main_brand_features_v1">
    <div class="se-container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mt-2 mt-sm-3 mt-lg-0 px-0 px-sm-2">
                <div
                    class="d-flex flex-column justify-content-center align-items-center w-100 border py-4 px-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="29" height="30" viewBox="0 0 29 30"><path d="M14.2504 30L0 22.8814V7.01669L14.2504 0L28.5009 7.01273V22.8814L14.2504 30ZM2.64633 21.246L14.2504 27.0388L25.8546 21.242V8.66276L14.2504 2.95069L2.64633 8.66276V21.246ZM15.5736 28.5207H12.9273V15.0152L0.739716 9.02798L1.90671 6.64627L15.5736 13.3666V28.5207ZM15.5736 28.5207H12.9273V13.3665L26.5942 6.6515L27.7612 9.03321L15.5736 15.0152V28.5207ZM14.2504 15.6596L0.739716 9.02798L1.90671 6.64627L14.2504 12.717L26.5942 6.65292L27.7612 9.03457L14.2504 15.6596Z"></path></svg>
                    <strong>Free Shipping</strong>
                    <span>You will love at great low prices</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-2 mt-sm-3 mt-lg-0 px-0 px-sm-2">
                <div
                    class="d-flex flex-column justify-content-center align-items-center w-100 border py-4 px-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="22" viewBox="0 0 30 22"><path d="M0 0H29.4643V22H0V0ZM27.5 1.9643H1.9643V20.0357H27.5V1.9643ZM0 5.97617H29.4643V11.9167H0V4.97617ZM27.5 6.94047H1.9643V9.95238H27.5V6.94047Z"></path></svg>
                    <strong>Flexible Payment</strong>
                    <span>Pay with Multiple Credit Cards</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-2 mt-sm-3 mt-lg-0 px-0 px-sm-2">
                <div
                    class="d-flex flex-column justify-content-center align-items-center w-100 border py-4 px-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="29" height="18" viewBox="0 0 29 18"><path d="M25.5 1.5V7.5H5.745L11.115 2.115L9 0L0 9L9 18L11.115 15.885L5.745 10.5H28.5V1.5H25.5Z"></path></svg>
                    <strong>21 Day Returns</strong>
                    <span>Within 30 days for an exchange</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-2 mt-sm-3 mt-lg-0 px-0 px-sm-2">
                <div
                    class="d-flex flex-column justify-content-center align-items-center w-100 border py-4 px-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                    </svg>
                    <strong>Premium Support</strong>
                    <span>Outstanding premium support</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="main_happy_clients_v1">
    <div class="se-container">
        <h3 class="text-center fs-1">Happy Clients</h3>
        <p class="text-center fs-6 mt-3 px-2">Hear what they say about</p>
        <div class="main-happy-clients blaze-slider">
            <div class="blaze-container">
                <div class="blaze-track-container">
                    <div class="blaze-track">
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Best Online Fashion Shop
                                </h3>
                                <p class="comment-desc">
                                    "I always find something fashionable at SE. I love their affordable collections on this fashion website."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">John Doe</span>
                                <span class="comment-author-desc">Customer from USA</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_1.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">Jersey Thong Body</span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Great Selection and Quality
                                </h3>
                                <p class="comment-desc">
                                    "I Iove the variety of Styles and the high-quality clothing on this web fashion site."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">Ailen Lyn</span>
                                <span class="comment-author-desc">Customer from France</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_2.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">Cotton Jersey Body Thong</span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">From $59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Best Customer Service
                                </h3>
                                <p class="comment-desc">
                                    "I finaliy found a web fashion site with Stylish and flattering options in my size."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">Peter Rope</span>
                                <span class="comment-author-desc">Customer from Italy</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_3.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">New Jersey </span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                        d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                        fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Great Selection and Quality
                                </h3>
                                <p class="comment-desc">
                                    "I Iove the variety of Styles and the high-quality clothing on this web fashion site."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">Ailen Lyn</span>
                                <span class="comment-author-desc">Customer from France</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_4.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">New Fabulous Thong</span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Great Selection and Quality
                                </h3>
                                <p class="comment-desc">
                                    "I Iove the variety of Styles and the high-quality clothing on this web fashion site."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">Ailen Lyn</span>
                                <span class="comment-author-desc">Customer from France</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_2.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">Cotton Jersey Body Thong</span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">From $59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="blaze-slide client-comment-item">
                            <div class="comment-star">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 14 13" fill="#ff7b54" width="18" height="17">
                                    <path
                                            d="M6.84211 10.4479L11.0705 13L9.94842 8.19L13.6842 4.95368L8.76474 4.53632L6.84211 0L4.91947 4.53632L0 4.95368L3.73579 8.19L2.61368 13L6.84211 10.4479Z"
                                            fill="#ff7b54"
                                    ></path>
                                </svg>
                            </div>
                            <div class="comment">
                                <h3 class="comment-title">
                                    Great Selection and Quality
                                </h3>
                                <p class="comment-desc">
                                    "I Iove the variety of Styles and the high-quality clothing on this web fashion site."
                                </p>
                            </div>
                            <div class="comment-author">
                                <span class="comment-author-name">Ailen Lyn</span>
                                <span class="comment-author-desc">Customer from France</span>
                            </div>
                            <a href="#" class="commented-item text-decoration-none">
                                <div class="comment-product">
                                    <img loading="lazy" src="./public/images/product_4.webp" alt="" class="comment-product-img">
                                    <div class="comment-product-details">
                                        <span class="comment-product-title">New Fabulous Thong</span>
                                        <div class="comment-product-price-variant-1">
                                            <span class="comment-original-price">$99.00</span>
                                            <span class="comment-discount-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-product-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="none" width="9" height="9">
                                        <path d="M0.969231 9L0 8.03077L6.64615 1.38462H0.692308V0H9V8.30769H7.61538V2.35385L0.969231 9Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blaze-navs">
                <button class="blaze-prev disabled" title="See previous comment">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" width="7" height="11">
                        <path d="M5.5 11L0 5.5L5.5 0L6.47625 0.97625L1.9525 5.5L6.47625 10.0238L5.5 11Z" fill="currentColor"></path>
                    </svg>
                </button>
                <button class="blaze-next" title="See next comment">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" width="7" height="11">
                        <path d="M1.5 11L7 5.5L1.5 0L0.52375 0.97625L5.0475 5.5L0.52375 10.0238L1.5 11Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    const landing_carousel = new BlazeSlider($('.landing_carousel.blaze-slider')[0], {
        all: {
            slidesToShow: 1,
            slideGap: '0px',
            loop: false,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayDirection: 'right'
        }
    });
    landing_carousel.onSlide((pageIndex, firstSlideIndex, lastSlideIndex) => {
        const slides = $('.landing_carousel .blaze-slide');
        slides.each(function (index) {
            $(this).removeClass('active');
            if (index >= firstSlideIndex && index <= lastSlideIndex) {
                $(this).addClass('active');
            }
        });
    });
    const main_category_carousel = new BlazeSlider($('.main-category-carousel.blaze-slider')[0], {
        all: {
            slidesToShow: 1,
            slideGap: '16px',
            loop: false,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayDirection: 'right'
        },
        "(min-width: 576px)": {
            slidesToShow: 2
        },
        "(min-width: 768px)": {
            slidesToShow: 3
        },
        "(min-width: 992px)": {
            slidesToShow: 4
        },
        "(min-width: 1140px)": {
            slidesToShow: 5
        },
    });
    main_category_carousel.onSlide((pageIndex, firstSlideIndex, lastSlideIndex) => {
        const prevBtn = $('.main-category-carousel .blaze-prev');
        const nextBtn = $('.main-category-carousel .blaze-next');

        if ($('.main-category-carousel').hasClass('start')) {
            prevBtn.addClass('disabled');
        }
        if ($('.main-category-carousel').hasClass('end')) {
            nextBtn.addClass('disabled');
        }
        if (!$('.main-category-carousel').hasClass('start')) {
            prevBtn.removeClass('disabled');
        }
        if (!$('.main-category-carousel').hasClass('end')) {
            nextBtn.removeClass('disabled');
        }
    });
    const main_trend_products = new BlazeSlider($('.main-trend-products.blaze-slider')[0], {
        all: {
            slidesToShow: 1,
            slidesToScroll: 1,
            slideGap: '20px',
            loop: false,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayDirection: 'right'
        },
        "(min-width: 576px)": {
            slidesToShow: 2
        },
        "(min-width: 768px)": {
            slidesToShow: 3
        },
        "(min-width: 1025px)": {
            slidesToShow: 4
        }
    });
    const main_happy_clients_v1 = new BlazeSlider($('.main-happy-clients.blaze-slider')[0], {
        all: {
            slidesToShow: 1,
            slidesToScroll: 1,
            slideGap: '20px',
            loop: false,
            autoplay: true,
            autoplaySpeed: 5000,
            autoplayDirection: 'right'
        },
        "(min-width: 576px)": {
            slidesToShow: 2,
            slidesToScroll: 2
        },
        "(min-width: 1025px)": {
            slidesToShow: 3,
            slidesToScroll: 3
        }
    });
    main_happy_clients_v1.onSlide((pageIndex, firstSlideIndex, lastSlideIndex) => {
        const prevBtn = $('.main-happy-clients .blaze-prev');
        const nextBtn = $('.main-happy-clients .blaze-next');

        if ($('.main-happy-clients').hasClass('start')) {
            prevBtn.addClass('disabled');
        }
        if ($('.main-happy-clients').hasClass('end')) {
            nextBtn.addClass('disabled');
        }
        if (!$('.main-happy-clients').hasClass('start')) {
            prevBtn.removeClass('disabled');
        }
        if (!$('.main-happy-clients').hasClass('end')) {
            nextBtn.removeClass('disabled');
        }
    });
</script>
<?php
require_once './inc/footer.php';
?>
