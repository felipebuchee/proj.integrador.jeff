<?php 

require_once __DIR__ . '/../app/core/Autoload.php';
require_once __DIR__ . '/../app/config/Config.php';

use app\core\Router;

$router = new Router();

$router->get('/', 'SiteController@index');
$router->get('/sobre', 'SiteController@about');
$router->get('/contato', 'SiteController@contact');

// Player Routes
$router->get('/jogadores', 'PlayerController@getAll');
$router->get('/jogadores/jogador', 'PlayerController@getPlayer');
$router->get('/jogadores/cadastrar', 'PlayerController@createPlayer');
$router->post('/jogadores/salvar', 'PlayerController@savePlayer');
$router->get('/jogadores/editar', 'PlayerController@editPlayer');
$router->post('/jogadores/atualizar', 'PlayerController@updatePlayer');
$router->get('/jogadores/excluir', 'PlayerController@deletePlayer');

$router->run();