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

use Maknz\Slack\Facades\Slack;

Route::get('/', function () {
    Slack::to('#general')->send('Are we rich yet?');

    return view('welcome');
});
