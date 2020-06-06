<?php

$n = @$_REQUEST['n'];

if (!is_numeric($n) || $n > 1000000000) {
    echo "Nieprawidłowy format parametru n";
} else {
    if (is_prime($n)) {
        echo $n . " to liczba pierwsza";
    } else {
        echo $n . " to liczba złożona";
    }
}

function is_prime($n){
    for($i = $n; --$i && $n%$i;);
    // return true if only divisor is 1
    return $i == 1;
}