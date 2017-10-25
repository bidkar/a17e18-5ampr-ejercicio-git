<?php
namespace Src\App;

class Router {
    private $controller = '';
    private $action = '';
    private $param = '';

    // /controller/action/params
    public static function get($url) {
        $x = preg_split('/[\/]/', $url);
        $controller = $x[0];
        $action = $x[1];
        $param = $x[2];
        var_dump($x);
        return 0;
    }

    public static function post($url) {
        return 0;
    }
}