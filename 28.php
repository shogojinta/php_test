<?php
    $globalVariable = 'グローバル変数';

    function checkScope($str){
        $localVariable = 'ローカル変数';
        // echo $localVariable;
        // global $globalVariable;
        // echo $globalVariable;
        echo $str;
    }

    // echo $globalVariable;
    // echo $localVariable;

    checkScope($globalVariable);
