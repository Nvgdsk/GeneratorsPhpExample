<?php
function arrayRead($array){
        foreach($array as $val){
          yield $val;
        }
    
}
function generator($generator){
  $sum = 0;
  foreach ($generator as $gen){
      print_r($gen."/");
      $sum+=$gen;
    }
  return $sum;
}
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];//hardcode
$sum = generator(arrayRead(arrayRead($array)));
print_r("sum = " . $sum);
