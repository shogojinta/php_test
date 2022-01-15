<?php

for($i = 0; $i<10; $i++){
  if($i === 5){
    // break;
    continue;
  }
  echo $i;
}

$j = 0;
while($j<5){
  echo $j;
  $j++;
}

do{echo $j;}
while($j<5);

?>