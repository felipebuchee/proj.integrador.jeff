<?php 

require_once __DIR__ . '/../app/core/Autoload.php';
require_once __DIR__ . '/../app/config/Config.php';


use app\core\Route;

$route = new Route();

$route->route('/jogadores', 'PlayerController@index');
