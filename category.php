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

<section>
    <div class="container">
        <div class="product-list">
            <?php
            for($i = 0; $i < 12; $i++){
            ?>
        <div class="productItem" data-hover="false">
                                <div class="w-100 rounded position-relative overflow-hidden">
                                    <a href="/e-commerce/product" title="See our product" class="product-img-link">
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
                            <?php
            }
                            ?>
        </div>
    </div>
</section>

<?php
require_once './inc/footer.php';
?>
