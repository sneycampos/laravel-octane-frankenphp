<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    phpinfo();
    die();
});

Route::get('sleep', function () {
    sleep(20);
    return response()->json(['message' => 'Slept for 20 seconds']);
});

Route::get('ping', function () {
    return response()->json(['message' => 'Pong']);
});
