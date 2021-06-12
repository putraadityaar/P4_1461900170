<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\putraController;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/buku', [putraController::class, 'buku']);
Route::get('/buku/export/',[putraController::class,'buku']);