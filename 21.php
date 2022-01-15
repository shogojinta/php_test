<?php 

function test(){
    echo 'test';
}

test();

$comment = 'comme!!';

function getComment($string){
  echo $string;
}

getComment($comment);

function getNumberOfComment(){
  return 5;
}

var_dump(getNumberOfComment());
echo getNumberOfComment();

function sumPrice($int1,$int2){
  $int3 = $int1 + $int2;
  return $int3;
} 

$total = sumPrice(3,5);

echo $total;

?>