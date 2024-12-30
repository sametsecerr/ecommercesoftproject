<?php
require_once './inc/header.php';
$cart_items = [
    [
        'name' => 'Nike Spor Ayakkabı',
        'original_price' => 1299.99,
        'discounted_price' => 999.99,
        'quantity' => 1,
        'image' => 'assets/img/product1.jpg'
    ]
];

$free_shipping_limit = 750; // Ücretsiz kargo limiti

?>

<style>

.cart-section{
    margin-top: 120px;
}
.cart-header {
    margin-bottom: 2rem;
}

.cart-header h1 {
    color: #333;
    font-size: 24px;
}

.free-shipping-alert {
    background-color: #e3f2fd;
    color: #1565c0;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.cart-item {
    display: flex;
    gap: 2rem;
    padding: 2rem;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-bottom: 1rem;
}

.item-image img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.item-details {
    flex: 1;
}

.price-container {
    margin: 1rem 0;
}

.original-price {
    text-decoration: line-through;
    color: #999;
    margin-right: 1rem;
}

.discounted-price {
    color: #e53935;
    font-weight: bold;
    font-size: 1.2rem;
}

.quantity-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 1rem 0;
}

.qty-btn {
    background: #f5f5f5;
    border: none;
    padding: 5px 15px;
    border-radius: 4px;
    cursor: pointer;
}

.quantity-controls input {
    width: 60px;
    text-align: center;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.remove-item {
    background: none;
    border: none;
    color: #e53935;
    cursor: pointer;
    padding: 5px 0;
}

.cart-summary {
    background: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    margin-top: 2rem;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.total {
    font-size: 1.2rem;
    font-weight: bold;
    border-top: 1px solid #eee;
    padding-top: 1rem;
}

.free-shipping {
    color: #4caf50;
}

.checkout-btn {
    width: 100%;
    padding: 1rem;
    background: #4caf50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1.1rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 1rem;
}

.checkout-btn:hover {
    background: #43a047;
}
</style>
<section class="cart-section">
    <div class="container">
    <div class="cart-container">
    <div class="cart-header">
        <h1><i class="fas fa-shopping-cart"></i> Alışveriş Sepetim</h1>
    </div>

    <?php if($free_shipping_limit > 0): ?>
    <div class="free-shipping-alert">
        <i class="fas fa-truck"></i>
        <span>750 TL ve üzeri alışverişlerinizde kargo bedava!</span>
    </div>
    <?php endif; ?>

    <div class="cart-items">
        <?php foreach($cart_items as $item): ?>
            <div class="cart-item">
                <div class="item-image">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                </div>
                <div class="item-details">
                    <h3><?php echo $item['name']; ?></h3>
                    <div class="price-container">
                        <span class="original-price"><?php echo number_format($item['original_price'], 2); ?> TL</span>
                        <span class="discounted-price"><?php echo number_format($item['discounted_price'], 2); ?> TL</span>
                    </div>
                    <div class="quantity-controls">
                        <button class="qty-btn" onclick="updateQuantity('decrease')">-</button>
                        <input type="number" value="<?php echo $item['quantity']; ?>" min="1" max="10">
                        <button class="qty-btn" onclick="updateQuantity('increase')">+</button>
                    </div>
                    <button class="remove-item"><i class="fas fa-trash"></i> Ürünü Kaldır</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cart-summary">
        <div class="summary-row">
            <span>Ara Toplam:</span>
            <span>999.99 TL</span>
        </div>
        <div class="summary-row">
            <span>Kargo:</span>
            <span class="free-shipping">Ücretsiz</span>
        </div>
        <div class="summary-row total">
            <span>Toplam:</span>
            <span>999.99 TL</span>
        </div>
        <button class="checkout-btn">
            <i class="fas fa-lock"></i> Alışverişi Tamamla
        </button>
    </div>
</div>
    </div>
</section>
<?php
require_once './inc/footer.php';
?>
