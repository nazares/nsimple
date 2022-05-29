<?php

define("CREATIONYEAR", 2022);

function debug($argv, $sp = true)
{
    echo '<pre style="background: #3f03; border: 1px solid #0003; padding: .2rem .5rem;">';
    var_dump($argv);
    echo "</pre>";

    if ($sp) {
        exit;
    }
}
