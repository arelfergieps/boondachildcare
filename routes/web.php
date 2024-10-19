<?php

use App\Http\Controllers\SesiControllerr;
use App\Http\Controllers\ChildAdController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\GalleryController;
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
Route::get('/login', [SesiController::class, 'Pagelogin'])->name('login');
Route::post('/addlogin', [SesiController::class, 'login']);
});

Route::get('/home',function(){
    return redirect('/login');
});
 
Route::get('/logout' ,[SesiController::class, 'logout']);
Route::get('/', [dashboardController::class, 'indexPage'])->name('home');
Route::get('/galleri', [dashboardController::class, 'galleri']);
Route::get('/detailcard', [dashboardController::class, 'detailcard']);
Route::get('/kolaborator', [dashboardController::class, 'kolaborator']);
Route::get('/katalog', [dashboardController::class, 'katalog']);
// Route::get('/admin/admin', [ChildAdController::class, 'index']);
Route::get('/admin', [ChildAdController::class, 'index'])->middleware('auth')->name('admin');



