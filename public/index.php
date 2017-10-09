<?php
require_once '../config.inc.php';
require_once '../src/app/autoload.php';
use Src\App\Router;

Router::get('/', 'home@index');

// if (isset($_GET['url'])) {
//     switch ($_GET['url']) {
//         case 'home': include '../src/views/home.php';
//                      break;
//         case 'user': echo 'Estas pidiendo user';
//                      break;
//         case 'login': include '../src/views/login.php';
//                       break;
//     }
// } else {
//     include '../src/views/home.php';
// }