<?php
    $romans=array(
    "M" => 1000 ,
    "CM" => 900 ,
    "D" => 500,
    "CD" => 400,
    "C" => 100,
    "XC" =>90 ,
    "L" =>50 ,
    "XL" =>40 ,
    "X" =>10 ,
    "IX" =>9 ,
    "V" =>5 ,
    "IV" =>4 ,
    "I" =>1);
    $result= "";
    $num=598;
    while($num>0){
        foreach($romans as $key => $value){
            if($num - $value >= 0){
                $num -= $value;
                $result .= $key;
                break;
            }
        }
        
    }
    return $result;
?>