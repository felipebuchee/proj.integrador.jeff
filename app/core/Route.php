<?php

namespace app\core;

class Route
{


    public function route($route, $action)
    {

        list($controller, $method) = explode('@', $action);

        $uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $controllerClass = "app\\controllers\\$controller";
        

        switch ($uri) {
            case '/teste':
                print 'teste!';
                break;

            case '/jogadores':


                break;

            case '/jogador':
                $playerController = new $controller();
                $playerController->$method();

                break;



            default:
                http_response_code(404);
                print 'Página não encontrada';
                break;
        }
    }
}
