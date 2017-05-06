<?php

$n=5;

for($i=1;$i<=$n;$i++){
    for($j=($n-$i)+1;$j>=1;$j--){
        echo "* ";
    }
    echo "<br>";
}