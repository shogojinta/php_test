<?php
  class Product {
    private $product = [];

    function __construct($product){
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public static function getStaticProduct($str){
        echo $str;
    }
  }

  $instance = new Product('テスト');

  $instance->getProduct();
  echo '<br>';

  $instance->addProduct('追加分');

  $instance->getProduct();

  Product::getStaticProduct('静的');
  echo '<br>';