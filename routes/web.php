<?php

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

Route::get('/', function () {
    return redirect(\route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/football',[\App\Http\Controllers\FootballerControllet::class,'index'])->name('football.index');
Route::get('/football/create',[\App\Http\Controllers\FootballerControllet::class,'create'])->name('football.create');
Route::get('/football/{id}/edit',[\App\Http\Controllers\FootballerControllet::class,'edit'])->name('football.edit');
Route::post('/football/{id}/destroy',[\App\Http\Controllers\FootballerControllet::class,'delete'])->name('football.destroy');
Route::post('/football',[\App\Http\Controllers\FootballerControllet::class,'store'])->name('football.store');
Route::post('/football/{id}',[\App\Http\Controllers\FootballerControllet::class,'update'])->name('football.update');
Route::get('/football/{id}',[\App\Http\Controllers\FootballerControllet::class,'show'])->name('football.show');

Route::get('/image',[\App\Http\Controllers\ImageController::class,'index'])->name('image.index');
Route::get('/image/create',[\App\Http\Controllers\ImageController::class,'create'])->name('image.create');
Route::get('/image/{id}/edit',[\App\Http\Controllers\ImageController::class,'edit'])->name('image.edit');
Route::post('/image/{id}/destroy',[\App\Http\Controllers\ImageController::class,'delete'])->name('image.destroy');
Route::post('/image',[\App\Http\Controllers\ImageController::class,'store'])->name('image.store');
Route::post('/image/{id}',[\App\Http\Controllers\ImageController::class,'update'])->name('image.update');
Route::get('/image/{id}',[\App\Http\Controllers\ImageController::class,'show'])->name('image.show');







require __DIR__.'/auth.php';
