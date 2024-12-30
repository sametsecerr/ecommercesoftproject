<?php
$meta = [
    'title' => 'Customer Detail',
    'description' => 'Customer Detail Page',
    'keywords' => 'Customer Detail, Customer Detail Page',
    'author' => 'YES',
    'robots' => 'index, follow',
];
require_once './inc/header.php';

$pages = [
    'account' => 0,
    'account-info' => 1,
    'password-change' => 2,
    'address-book' => 3,
    'notification-preferences' => 4,
    'orders' => 5,
    'return-requests' => 6,
    'shopping-cart' => 7,
    'favorites' => 8,
    'comments' => 9,
    'wishlists' => 10,
    'price-alerts' => 11,
    'stock-alerts' => 12,
    'contracts' => 13,
    'points-gifts' => 14,
    'support-requests' => 15,
    'payment-form' => 16
];

if (isset($_GET['page'])) {
    $page = strtolower($_GET['page']);
    if (array_key_exists($page, $pages)) {
        $activeTab = $pages[$page];
    }else{
        $activeTab = 0;
    }
}else{
    $activeTab = 0;
}
if(!isLogged()){
    header('Location: ./login');
    exit;
}
?>

<div class="navbar-placeholder"></div>
<section id="customerDetail_v1">
    <div class="se-container">
        <div class="row">
            <div class="col-3">
                <ul class="customerDetail-sidebar">
                <li class="customer-sidebar-item" data-tabs="0">Hesabım</li>

                    <li class="customer-sidebar-item has-dropdown d-flex flex-column align-items-start" data-tabs="settings">
                        Hesap Ayarlarım
                        <ul class="settings-dropdown text-white">
                            <li data-tabs="1">Üyelik Bilgilerim</li>
                            <li data-tabs="2">Şifre Değiştir</li>
                            <li data-tabs="3">Adres Defterim</li>
                            <li data-tabs="4">Duyuru Tercihlerim</li>
                        </ul>
                    </li>
                    <li class="customer-sidebar-item" data-tabs="5">Siparişlerim</li>
                    <li class="customer-sidebar-item" data-tabs="6">İade Taleplerim</li>
                    <li class="customer-sidebar-item" data-tabs="7">Alışveriş Sepetim</li>
                    <li class="customer-sidebar-item" data-tabs="8">Favorilerim</li>
                    <li class="customer-sidebar-item" data-tabs="9">Yorumlarım</li>
                    <li class="customer-sidebar-item" data-tabs="10">İstek Listelerim</li>
                    <li class="customer-sidebar-item" data-tabs="11">Fiyat Alarm Listem</li>
                    <li class="customer-sidebar-item" data-tabs="12">Stok Alarm Listem</li>
                    <li class="customer-sidebar-item" data-tabs="13">Sözleşmelerim</li>
                    <li class="customer-sidebar-item has-dropdown" data-tabs="points">
                        Para/Puan Hediye Çeki
                        <ul class="points-dropdown">
                            <li data-tabs="14">Para Puanlarım</li>
                            <li data-tabs="14">Hediye Çeklerim</li>
                        </ul>
                    </li>
                    <li class="customer-sidebar-item" data-tabs="15">Destek Taleplerim</li>
                    <li class="customer-sidebar-item" data-tabs="16">Ödeme Formu</li>
                    <li class="customer-sidebar-item" onclick="logout()">Güvenli Çıkış</li>
                </ul>    
            </div>
            <div class="col-9 px-4">
               <div class="customerTab-content" data-tabc="0" data-active="<?= $activeTab == 0 ? 'true' : 'false'?>">
               <div class="customerDetail-content">
                    <p class="welcomeUser">WELCOME, &nbsp;<strong><?= $_SESSION['name'] ?></strong></p>
                    <span class="text-muted d-block mt-3 mb-4">
                    "Hesabım" sayfasından siparişlerinizi ve arıza/iade/değişim işlemlerinizi takip edebilir, kazandığınız hediye çeki ve puanları görüntüleyebilir, üyelik bilgisi güncelleme, şifre ve adres değişikliği gibi hesap ayarlarınızı kolayca yapabilirsiniz.
                    </span>
                </div>

                <div class="grid-4">
  <div class="account-box">
    <i class="fas fa-life-ring"></i>
    <span>Destek Taleplerim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-bell"></i>
    <span>Siparişlerim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-user"></i>
    <span>Üyelik Bilgilerim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-map-marker-alt"></i>
    <span>Adres Defterim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-gift"></i>
    <span>Hediye Çeklerim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-star"></i>
    <span>Para Puanlarım</span>
  </div>
  <div class="account-box">
    <i class="fas fa-sync-alt"></i>
    <span>İade Taleplerim</span>
  </div>
  <div class="account-box">
    <i class="fas fa-shopping-cart"></i>
    <span>Alışveriş Sepetim</span>
  </div>
</div>


               </div>
                <div class="customerTab-content" data-tabc="1" data-active="<?= $activeTab == 1 ? 'true' : 'false' ?>">
                    <h3>Üyelik Bilgilerim</h3>
                    <?php include './profilePages/accountSettings.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="2" data-active="<?= $activeTab == 2 ? 'true' : 'false' ?>">
                    <h3>Şifre Değiştir</h3>
                    <?php include './profilePages/changePassword.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="3" data-active="<?= $activeTab == 3 ? 'true' : 'false' ?>">
                    <h3>Adres Defterim</h3>
                    <?php include './profilePages/addressBook.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="4" data-active="<?= $activeTab == 4 ? 'true' : 'false' ?>">
                    <h3>Duyuru Tercihlerim</h3>
                    <?php include './profilePages/notificationPreferences.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="5" data-active="<?= $activeTab == 5 ? 'true' : 'false' ?>">
                    <h3>Siparişlerim</h3>
                    <?php include './profilePages/orders.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="6" data-active="<?= $activeTab == 6 ? 'true' : 'false' ?>">
                    <h3>İade Taleplerim</h3>
                    <?php include './profilePages/returnRequests.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="7" data-active="<?= $activeTab == 7 ? 'true' : 'false' ?>">
                    <h3>Alışveriş Sepetim</h3>
                    <?php include './profilePages/shoppingCart.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="8" data-active="<?= $activeTab == 8 ? 'true' : 'false' ?>">
                    <h3>Favorilerim</h3>
                    <?php include './profilePages/favorites.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="9" data-active="<?= $activeTab == 9 ? 'true' : 'false' ?>">
                    <h3>Yorumlarım</h3>
                    <?php include './profilePages/comments.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="10" data-active="<?= $activeTab == 10 ? 'true' : 'false' ?>">
                    <h3>İstek Listelerim</h3>
                    <?php include './profilePages/wishlists.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="11" data-active="<?= $activeTab == 11 ? 'true' : 'false' ?>">
                    <h3>Fiyat Alarm Listem</h3>
                    <?php include './profilePages/priceAlerts.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="12" data-active="<?= $activeTab == 12 ? 'true' : 'false' ?>">
                    <h3>Stok Alarm Listem</h3>
                    <?php include './profilePages/stockAlerts.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="13" data-active="<?= $activeTab == 13 ? 'true' : 'false' ?>">
                    <h3>Sözleşmelerim</h3>
                    <?php include './profilePages/contracts.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="14" data-active="<?= $activeTab == 14 ? 'true' : 'false' ?>">
                    <h3>Para Puanlarım</h3>
                    <?php include './profilePages/points.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="14" data-active="<?= $activeTab == 14 ? 'true' : 'false' ?>">
                    <h3>Hediye Çeklerim</h3>
                    <?php include './profilePages/giftVouchers.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="15" data-active="<?= $activeTab == 15 ? 'true' : 'false' ?>">
                    <h3>Destek Taleplerim</h3>
                    <?php include './profilePages/supportRequests.php' ?>
                </div>
                <div class="customerTab-content" data-tabc="16" data-active="<?= $activeTab == 16 ? 'true' : 'false' ?>">
                    <h3>Ödeme Formu</h3>
                    <?php include './profilePages/paymentForm.php' ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function(){
    $('.has-dropdown').click(function(e){
        if($(e.target).is('.has-dropdown')) {
            $(this).toggleClass('active');
        }
    });

    $('.settings-dropdown li, .points-dropdown li').click(function(e){
        e.stopPropagation();
        var tab = $(this).attr('data-tabs');
        switchTab(tab);

    });

    $('.customer-sidebar-item:not(.has-dropdown)').click(function(){
       
        $('.has-dropdown').removeClass('active');
        
        var tab = $(this).attr('data-tabs');
        switchTab(tab);
    });

    function switchTab(tab) {
        $('.customerTab-content').hide();
        
        $('.customerTab-content').attr('data-active', 'false');
        $('.customerTab-content[data-tabc="'+tab+'"]').attr('data-active', 'true');
        $('.customerTab-content[data-tabc="'+tab+'"]').show();
        
        var pageName = getPageNameByTab(tab);
        var newUrl = updateQueryStringParameter(window.location.href, 'page', pageName);
        window.history.pushState({ path: newUrl }, '', newUrl);
    }

    function getPageNameByTab(tab) {
        const pageNames = {
            '1': 'account-info',
            '2': 'password-change',
            '3': 'address-book',
            '4': 'notification-preferences',
            '5': 'orders',
            // ... diğer sayfalar için devam eder
        };
        return pageNames[tab] || 'account';
    }

    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        }
        else {
            return uri + separator + key + "=" + value;
        }
    }
});
</script>
<?php
require_once './inc/footer.php';
?>
