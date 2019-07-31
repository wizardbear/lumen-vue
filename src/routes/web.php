<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', 'ExampleController@show');
$router->get('/foo', function () use ($router) {
    return response()->json(json_encode(array('error' => 0, 'message' => 'Hello World')));
});