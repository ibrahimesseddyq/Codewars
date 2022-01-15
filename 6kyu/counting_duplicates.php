<?php
    $text="aabBccccccccde";
    $count=0;
    $temp='';
    $arr=array();
    $text=strtolower($text);
    $text=str_split($text);
    foreach($text as $t){
        $temp = $t;
        array_shift($text);
        array_unshift($arr,$temp);

        if(array_key_exists($temp,$text) && !array_key_exists($temp,$arr)){
            $count++;
            echo $count;
        }
    }
    echo $count;

?>