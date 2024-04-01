<?php
    class Basket extends Controller {
        public function index() {

            $data = [];
            $cart = $this->model('BasketModel');
            if(isset($_POST['item_id']))
                $cart->addToCart($_POST['item_id']);

            if(!$cart->isSetSession())
                $data['empty'] = 'Пустая корзина';
            else {
                $products = $this->model('Products');
                $data['products'] = $products->getProductsCart($cart->getSession());
            }

            $this->view('basket/index', $data);
        }

        public function confirm()
        {
            require 'vendor/autoload.php';
            \Cloudipsp\Configuration::setMerchantId(1396424);
            \Cloudipsp\Configuration::setSecretKey('test');

            $checkoutData = [
                'currency' => 'USD',
                'amount' => $_POST['amount'] * 100,
                'order_desc' => 'Покупка товаров в магазине itProger',
            ];
            $data = \Cloudipsp\Checkout::url($checkoutData);
            $url = $data->getUrl();
            $data->toCheckout();
        }
    }