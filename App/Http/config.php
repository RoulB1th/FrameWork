<?php declare(strict_types=1);

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
use Symfony\Component\HttpFoundation\Response;

$response = new Response();