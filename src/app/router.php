<?php
namespace Src\App;

class Router {
    private $controller = '';
    private $action = '';
    private $param = '';

    // /controller/action/params
    // inicial = / || /home || /home/index
    // login = /login
    public static function get($url) { // $url = 'home'
        $x = preg_split('/[\/]/', $url);
        switch (count($x)) {
            case 3:
                $this->controller = $x[0];
                $this->action = $x[1];
                $this->param = $x[2];
                break;
            case 2:
                $this->controller = $x[0];
                $this->action = $x[1];
                break;
            case 1:
                $this->controller = $x[0];
                break;
        }
        var_dump($x);
        return 0;
    }

    public static function post($url) {
        return 0;
    }
}