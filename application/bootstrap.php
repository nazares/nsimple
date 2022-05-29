<?php

use application\core\Router;

// Load developing helper
require_once 'dev/helper.php';

// Loading Core libraries

spl_autoload_register(function ($className) {
    $path = '../' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

(new Router());
