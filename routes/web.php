<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/view2', function(){
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'INDEX']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);
Route::get('/test', [App\Http\Controllers\MyController::class,'index']);

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flights', 'FlightController@index');
});
