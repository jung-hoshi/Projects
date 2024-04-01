<header>
    <div class="container top-menu">
        <div class="nav">
            <a href="/">Home</a>
            <a href="/contact">Contacs</a>
            <a href="/contact/about">About</a>
        </div>
        <div class="tel">
            <i class="fas fa-phone"></i> +1 (100) 000 - 00 - 00
        </div>
    </div>
    <div class="container middle">
        <div class="logo">
            <img src="/public/img/logo.svg" alt="Logo">
            <span>We know what you want </span>
        </div>
        <div class="auth-checkout">
            <a href="/basket">

                <?php
                    require_once 'app/models/BasketModel.php';
                    $basketModel = new BasketModel();
                ?>

                <button class="btn basket">Cart <b>(<?=$basketModel->countItems()?>)</b></button>
            </a><br>
            <?php if($_COOKIE['login'] == ''): ?>
            <a href="/user/auth">
                <button class="btn auth">Log in</button>
            </a>
            <a href="/user/reg">
                <button class="btn">Sign in</button>
            </a>
            <?php else: ?>
            <a href="/user/dashboard">
                <button class="btn dashboard">My profile</button>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="container menu">
        <ul>
            <li><a href="/categories">All items</a></li>
            <li><a href="/categories/shoes">Shoes</a></li>
            <li><a href="/categories/hats">Hats</a></li>
            <li><a href="/categories/shirts">T-shirts</a></li>
            <li><a href="/categories/watches">Watches</a></li>
        </ul>
    </div>
</header>