<?php
    $str="ehT kciuq nworb xof spmuj revo eht yzal .god";
    $revs= explode(" ", $str);
    $arr=array();
  foreach($revs as $r){
      $r =strrev($r);
      array_push($arr,$r);
  }
    $rev=implode(" ",$arr);
    echo $rev;    
?>