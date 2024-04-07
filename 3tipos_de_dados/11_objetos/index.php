<?php

    class Pessoa {

        function falar() {
            echo "Olá mundo";
        }
    }

    $rian = new Pessoa();

    $rian->nome = "Rian";

    echo $rian->nome;

    echo "<br>";

    $rian->falar();

?>