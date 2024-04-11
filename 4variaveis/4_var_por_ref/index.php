<?php

    $a = 11;

    $b =& $a;

    echo "$a <br> $b";

    $b = 279;

    echo "<br> $a <br> $b";
?>