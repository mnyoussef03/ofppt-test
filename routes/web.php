<?php

use App\Http\Controllers\MarqueController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});
Route::get('/marque',[MarqueController::class, 'index']);
Route::get('/marque/create',[MarqueController::class,'create']);
Route::post('/marque',[MarqueController::class,'store']);

Route::get('/voiture',[VoitureController::class,'index']);
Route::get('/voiture/create',[VoitureController::class,'create']);
Route::post('/voiture',[VoitureController::class,'store']);
