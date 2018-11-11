<?php

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/key', function(){
    $key = str_random(32);
    return $key;
});


$router->get('/','BooksController@index');
$router->post('/create','BooksController@create');
$router->get('/book/{id}','BooksController@show');
$router->delete('/book/{id}','BooksController@delete');
$router->put('/book/{id}','BooksController@update');

$router->post('/register','AuthController@register');
$router->post('/login','AuthController@login');
