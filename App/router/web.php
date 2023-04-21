<?php declare(strict_types=1);
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\home;

$app->get('/',[home::class, "index"]);

$app->get('/home/{id}',[home::class, "another"]);

$app->get('/{id}',[home::class, "notFound"]);