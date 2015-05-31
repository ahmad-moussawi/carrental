<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$app->group(['prefix' => 'admin'], function($app)
{
    $app->get('users', function()
    {
        // Matches The "/admin/users" URL
    });
});


$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/reservation', function() use ($app) {
    return view('reservation');
});
