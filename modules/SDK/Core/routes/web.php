<?php
use Modules\SDK\Core\Http\Controllers\HomeController;
use Ivi\Http\JsonResponse;

/** @var \Ivi\Core\Router\Router $router */
$router->get('/s_d_k', [HomeController::class, 'index']);
$router->get('/s_d_k/ping', fn() => new JsonResponse([
    'ok' => true,
    'module' => 'SDK/Core'
]));