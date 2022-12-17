<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clubs;
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
    return redirect(\route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/football',[\App\Http\Controllers\FootballerControllet::class,'index'])->middleware(['auth'])->name('football.index');
Route::get('/football/create',[\App\Http\Controllers\FootballerControllet::class,'create'])->middleware(['auth','admin'])->name('football.create');
Route::get('/football/{id}/edit',[\App\Http\Controllers\FootballerControllet::class,'edit'])->middleware(['auth','admin'])->name('football.edit');
Route::post('/football/{id}/destroy',[\App\Http\Controllers\FootballerControllet::class,'destroy'])->middleware(['auth','admin'])->name('football.destroy');
Route::post('/football',[\App\Http\Controllers\FootballerControllet::class,'store'])->middleware(['auth','admin'])->name('football.store');
Route::post('/football/{id}',[\App\Http\Controllers\FootballerControllet::class,'update'])->middleware(['auth','admin'])->name('football.update');
Route::get('/football/{id}',[\App\Http\Controllers\FootballerControllet::class,'show'])->middleware(['auth'])->name('football.show');

Route::get('/image',[\App\Http\Controllers\ImageController::class,'index'])->middleware(['auth','admin'])->name('image.index');
Route::get('/image/create',[\App\Http\Controllers\ImageController::class,'create'])->middleware(['auth','admin'])->name('image.create');
Route::get('/image/{id}/edit',[\App\Http\Controllers\ImageController::class,'edit'])->middleware(['auth','admin'])->name('image.edit');
Route::post('/image/{id}/destroy',[\App\Http\Controllers\ImageController::class,'destroy'])->middleware(['auth','admin'])->name('image.destroy');
Route::post('/image',[\App\Http\Controllers\ImageController::class,'store'])->middleware(['auth','admin'])->name('image.store');
Route::post('/image/{id}',[\App\Http\Controllers\ImageController::class,'update'])->middleware(['auth','admin'])->name('image.update');
Route::get('/image/{id}',[\App\Http\Controllers\ImageController::class,'show'])->middleware(['auth'])->name('image.show');

Route::get('/clubs', [Clubs::class, 'index'])->middleware(['auth']);
Route::get('/clubs/{id}', [Clubs::class, 'show'])->middleware(['auth'])->name('clubs.show');




require __DIR__.'/auth.php';
