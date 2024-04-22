<?php

function fattorialeIter($num) {

    $fatt = 1;

    if ($num <= 1) {

        return 1;

    }

    for ($i = 1; $i <= $num; $i++) {

        $fatt *= $i;

    }

    return $fatt;

}

echo fattorialeIter(9);


?>