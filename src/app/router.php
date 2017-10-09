<?php
namespace Src\App;

use Src\Controllers\HomeController;

class Router {
    // /controller/action/params
    public static function get($route, $controller, $param = null) {
        if (!isset($_GET['url'])) {
            $ctl = preg_split('/[@]/', $controller);
            $call = $ctl[0].'Controller::'.$ctl[1].'()';
            call_user_func($call);
        } else {
            $url = preg_split('/[\/]/', $_GET['url']);
            var_dump($url);
        }
    }

    public static function post($route, $controller) {

    }
}