<?php namespace MyPlugin;

/** @var \Cartrabbit\Framework\Router $router */

$router->get([
    'as' => 'Test',
    'uri' => '/test',
    'uses' => __NAMESPACE__ . '\Controllers\Dashboard@index'
]);
