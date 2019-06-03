<?php

$router->get('/', function () use ($router) {
   return $router->version();
});

$router->get('/hello/{name}', [
    'as' => 'hello-word',
    'uses' => 'HelloController@index'
]);

$router->group(['prefix'=>'api'], function () use ($router) {
    $router->get('/users', 'Api\UsersController@index');
    $router->get('/users/{id}', 'Api\UsersController@show');
    $router->post('/users/', 'Api\UsersController@store');
});


