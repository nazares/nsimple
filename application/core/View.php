<?php

namespace application\core;

class View
{
    public $route;
    public $path;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = '../application/views/' . $this->path . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require '../application/views/layouts/' . $this->layout . '.php';
        } else {
            self::httpErrorCode(404);
        }
    }

    public function redirect($url)
    {
        header('Location: /' . $url);
        exit;
    }

    public static function httpErrorCode($code)
    {
        http_response_code($code);
        $path = '../application/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require $path;
        }
        exit;
    }
}
