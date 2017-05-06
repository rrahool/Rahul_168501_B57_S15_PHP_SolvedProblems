<?php

    $n      = 8;
    $space  = $n-1;

//    function printSpace($space){
//        echo "&nbsp;";
//    }
//
//    function printStar($star){
//        echo " *";
//    }

    for($i=1;$i<=$n;$i++){
        for($count=$space;$count>=1;$count--){
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i;$j++){
           echo "*";
        }
        echo "<br>";
        $space--;
    }