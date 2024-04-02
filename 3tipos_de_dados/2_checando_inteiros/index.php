<?php

    //true
    if (is_int (7)) {
        echo "É um inteiro <br>";
    }
    else {
        echo "Não é inteiro <br>";
    }

    //false
    if (is_int (5.3)) {
        echo "É um inteiro <br>";
    }
    else {
        echo "Não é inteiro <br>";
    }

    $x = 9;

    if (is_int ($x)) {
        echo "O numero é um inteiro <br>";
    }
    else {
        echo "O numero não é inteiro <br>";
    }

?>