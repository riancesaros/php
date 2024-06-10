<?php

    $teste = "qwe";

    echo "Global 1 = $teste <br>";
    if (5 > 2) {
        $teste = "ewq";
        echo "Dentro do IF = $teste <br>";
    }

    echo "Global 2= $teste <br>";

    function funcao () {
        $teste = "klp";

        echo "Local = $teste <br>";
    }

    funcao();

    function escopoGlobal () {
        global $teste;

        echo "Global = $teste <br>";
    }

    escopoGlobal();
?>