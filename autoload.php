<?php

autoload_class();

function autoload_class() {
    $directories = array(
        'app/config/',
        'app/controllers/',
        'app/models/',
        'app/lib/contracts/',
        'app/lib/',
    );
    foreach ($directories as $directory) {
        foreach (glob($directory."*.php") as $filename)
        {
            include_once $filename;
        }
    }
}


?>
