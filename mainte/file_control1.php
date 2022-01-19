<?php
    $contactFile = '.contact.dat';

    $fileContents = file_get_contents($contactFile);

    echo  $fileContents;

    file_put_contents($contactFile,'test' . "\n", FILE_APPEND);

    $allData = file($contactFile);

    foreach($allData as $lineData){
        $lines = explode(',', $lineData);
        echo $lines[0] . '<br>';
        echo $lines[1] . '<br>';
        echo $lines[2] . '<br>';
    }