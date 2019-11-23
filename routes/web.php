<?php




Route::get('/', function () {
    return view('welcome');
});
Route::prefix('auth')->group(function () {
    Route::get('init', 'AppContoller@init');
    Route::post('login', 'AppContoller@login');
    Route::post('register', 'AppContoller@register');
    Route::post('logout', 'AppContoller@logout');
});
