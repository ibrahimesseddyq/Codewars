<?php
function iterPi($epsilon) {
    $i=1;
    $iter=1/$epsilon;
    $res=0;
    while($i<$iter){
        $res += 1/$i - 1/($i+2);
        $i+=4;
    }
    return array((int)$iter,$res*4);
}?>