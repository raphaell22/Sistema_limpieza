<?php
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cliente', ClienteController::class);
Route::resource('/producto', ClienteController::class);
