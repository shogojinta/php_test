<?php
    $height = 92;

    // var_dump($height);

    // if($height >= 91){
    //     echo 'height:' . $height;
    // }

    // if($height <= 90){
    //     echo 'none';
    // }

    if($height !== 90){
        echo 'none';
    }

    echo '<br>';

    $test = 'a';

    if(!empty($test)){
        echo 'test';
    }

    echo '<br>';

    $signal_1 = 'red';
    $signal_2 = 'yellow';

    if($signal_1 === 'red' && $signal_2 === 'blue'){
        echo 'red and blue';
    }

    echo '<br>';

    if($signal_1 === 'red' || $signal_2 === 'blue'){
        echo 'red or blue';
    }

    echo '<br>';

    $math = 80;
    $comment = $math > 80 ? 'good' : 'not good';

    echo $comment;

    echo '<br>';

    $signal = 'blue';

    if($signal === 'red'){
        echo 'stop';
    }elseif($signal === 'yellow'){
        echo 'careful';
    }else{
        echo 'go';
    }

    echo '<br>';

    $speed = 80;

    if($signal === 'blue'){
        if($speed >= 80){
            echo 'NG';
        }
    }
?>