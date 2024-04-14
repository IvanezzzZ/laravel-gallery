<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HelperController;

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

Route::get('/', [GalleryController::class, 'index']);
Route::get('/about', [HelperController::class, 'about']);
Route::get('/home', [HelperController::class, 'home']);
Route::get('/add', [GalleryController::class, 'add']);
Route::get('/show/{id}', [GalleryController::class, 'show']);
Route::get('/edit/{id}', [GalleryController::class, 'edit']);
Route::post('/store', [GalleryController::class, 'store']);
Route::post('/update/{id}', [GalleryController::class, 'update']);
Route::get('/delete/{id}', [GalleryController::class, 'delete']);
