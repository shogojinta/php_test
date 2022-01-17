<?php

$text = 'あいうえお';

echo mb_strlen($text);

$str = '文字列を置換します';
echo str_replace('置換','ちかん',$str);

$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、' , $str_2));
echo '<pre>';

$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/',$str_3);


echo mb_substr('abcde',2);
echo mb_substr('あいうえお',2);

$array = ['りんご','みかん'];
array_push($array, 'ぶどう', 'なし');
echo '<pre>';
var_dump($array);
echo '</pre>';