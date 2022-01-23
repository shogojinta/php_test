<?php
    namespace App\Models;

    class TestModel {
        private $text = 'hello';
        
        public function getHello(){
            return $this->text;
        }
    }