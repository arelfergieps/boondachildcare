<?php

use App\Http\Controllers\SesiControllerr;
use App\Http\Controllers\ChildAdController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['guest'])->group(function(){
Route::get('/', [SesiController::class, 'admin']);
Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home',function(){
    return redirect('/admin');
});
Route::get('/admin' ,[ChildAdController::class, 'index']);
Route::get('/logout' ,[SesiController::class, 'logout']);
Route::get('/dashboard', [dashboardController::class, 'indexPage']);
Route::get('/galleri', [dashboardController::class, 'galleri']);


