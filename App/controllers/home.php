<?php declare(strict_types=1);
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class home{
    public static function index(Request $request, Response $response)
    {
        $lol = view("home");
        return $response;
    }
    public static function another(Request $request, Response $response,$args)
    {
        $id = $args['id'];
        $lol = view("another",["id"=>$id]);
        return $response;
    }

    public static function notFound(Request $request, Response $response,$args)
    {
        $id = $args['id'];
        $response->withStatus(404);
        $lol = view("notfound",["id"=>$id]);
        return $response;
    }
}
//Always make sure to return $reponse