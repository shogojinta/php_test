<?php
    trait ProductTrait{
        public function getProduct(){
            echo 'プロダクト';
        }
    }

    trait NewsTrait{
        public function getNews(){
            echo 'ニュース';
        }
    }


    class Product {
        use ProductTrait;
        use NewsTrait;

        public function getInfomation(){
            echo 'クラスです';
        }

        public function getNews(){
            echo 'クラスニュース';
        }
    }


    $product = new Product();

    $product->getInfomation();
    echo '<br>';
    $product->getProduct();
    echo '<br>';
    $product->getNews();
    echo '<br>';