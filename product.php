<?php
require_once './inc/header.php';

$meta = [
    'title' => 'Ürün Detay',
    'description' => 'Ürün detay sayfası',
    'keywords' => 'ürün, detay, alışveriş',
    'author' => 'YES',
    'robots' => 'index, follow',
];

/*if(!isLogged()){
    header('Location: ./login');
    exit;
}*/

?>
<style>
 
.product-container {
    display: flex;
    padding: 40px;
    gap: 40px;

}

.product-images {
    flex: 1;
    max-width: 500px;
}

.main-image {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 8px;
    overflow: hidden;
}

.main-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.thumbnail-images {
    display: flex;
    gap: 10px;
}

.thumbnail-images img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 4px;
    cursor: pointer;
    transition: opacity 0.3s;
}

.thumbnail-images img:hover {
    opacity: 0.8;
}

.product-details {
    flex: 1;
}

.product-title {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.product-price {
    margin-bottom: 30px;
}

.original-price {
    text-decoration: line-through;
    color: #999;
    font-size: 18px;
}

.discounted-price {
    font-size: 28px;
    font-weight: bold;
    color: #e41e31;
    margin: 0 10px;
}

.discount-badge {
    background: #e41e31;
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 14px;
}

.product-actions {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.quantity-selector {
    display: flex;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.quantity-selector button {
    padding: 10px 15px;
    border: none;
    background: #f5f5f5;
    cursor: pointer;
}

.quantity-selector input {
    width: 50px;
    text-align: center;
    border: none;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}

.add-to-cart {
    padding: 12px 30px;
    background: black;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}
.product-section{
    padding-top: 100px;
    padding-bottom: 100px;
}


.add-to-favorites {
    width: 46px;
    height: 46px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background: white;
    cursor: pointer;
    transition: all 0.3s;
}

.add-to-favorites:hover {
    background: #f5f5f5;
    color: #e41e31;
}

.product-description, .product-features {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}

.product-description h2, .product-features h2 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
}

.product-features ul {
    list-style: none;
    padding: 0;
}

.product-features li {
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

.product-features li:before {
    content: "•";
    position: absolute;
    left: 0;
    color: #4CAF50;
}

@media (max-width: 768px) {
    .product-container {
        flex-direction: column;
    }
    
    .product-images {
        max-width: 100%;
    }
}
</style>
<section class="product-section">
    <div class="container">
    <div class="product-container">
    <div class="product-images">
        <div class="main-image">
            <img src="./public/images/product_1.webp" alt="Ürün Ana Görsel" id="mainImage">
        </div>
        <div class="thumbnail-images">
            <img src="./public/images/product_5.webp" alt="Küçük Görsel 1" onclick="changeImage(this.src)">
            <img src="./public/images/product_1.webp" alt="Küçük Görsel 1" onclick="changeImage(this.src)">
            <img src="./public/images/product_5.webp" alt="Küçük Görsel 1" onclick="changeImage(this.src)">
            <img src="./public/images/product_1.webp" alt="Küçük Görsel 1" onclick="changeImage(this.src)">
        </div>
    </div>
    
    <div class="product-details">
        <h1 class="product-title">Ürün Adı</h1>
        <div class="product-price">
            <span class="original-price">1.299,99 TL</span>
            <span class="discounted-price">999,99 TL</span>
            <span class="discount-badge">%23 İndirim</span>
        </div>
        
        <div class="product-actions">
            <div class="quantity-selector">
                <button onclick="decreaseQuantity()">-</button>
                <input type="number" id="quantity" value="1" min="1">
                <button onclick="increaseQuantity()">+</button>
            </div>
            
            <button class="add-to-cart">Sepete Ekle</button>
            <button class="add-to-favorites"><i class="far fa-heart"></i></button>
        </div>
        
        <div class="product-description">
            <h2>Ürün Açıklaması</h2>
            <p>Buraya ürün açıklaması gelecek. Detaylı ürün özellikleri ve açıklamaları...</p>
        </div>
        
        <div class="product-features">
            <h2>Özellikler</h2>
            <ul>
                <li>Özellik 1</li>
                <li>Özellik 2</li>
                <li>Özellik 3</li>
            </ul>
        </div>
    </div>
</div>
    </div>
</section>
<section id="main_trend_products_v1">
    <div class="se-container">
        <h3 class="text-center fs-1">Önerilen Ürünler</h3>
        <p class="text-center fs-6 mt-3 px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, dolores.</p>
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
<script>
function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

function decreaseQuantity() {
    let qty = document.getElementById('quantity');
    if (qty.value > 1) qty.value--;
}

function increaseQuantity() {
    document.getElementById('quantity').value++;
}
</script>
<script>
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
</script>
<?php
require_once './inc/footer.php';
?>
