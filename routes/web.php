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
    return view('welcome');
});
Route::get('/ww', function () {
    return view('welcome');
});

Route::get('/test23', function () {
    return 'test2';
});
Route::get('/test', function () {
    return 'test11';

});

Route::get('/test4', function () {
    return 'test114';
});

Route::get('/test5', function () {
    return 'test4343';

});


