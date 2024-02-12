<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/collection', [CatController::class, 'index'])->name('collection.index');

Route::get('/collection/create', [CatController::class, 'create'])->name('collection.create');

Route::post('/collection', [CatController::class, 'store'])->name('collection.store');

Route::get('/collection/{cat}/edit', [CatController::class, 'edit'])->name('collection.edit');

Route::put('/collection{cat}/update', [CatController::class, 'update'])->name('collection.update');

Route::delete('/collection/{cat}/destroy', [CatController::class, 'destroy'])->name('collection.destroy');

Route::get('map', function () {
    return view('map');
});


