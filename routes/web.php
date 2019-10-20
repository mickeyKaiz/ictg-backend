<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/form', function () {
    return view('master');
});

Route::get('/docs', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('master');
})->name('master');

Route::get('/view', function () {
    return view('view');
});

Route::post('submit', 'FormController@someMethod');
Auth::routes();

Route::get('/home', function() {
    return view('master');
})->name('master');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return view('landing');
});