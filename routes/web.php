<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SingerController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/singers', [SingerController::class, 'index'])->name('singers.index');
Route::get('/singers/create', [SingerController::class, 'create'])->name('singers.create');
Route::post('/singers/store', [SingerController::class, 'store'])->name('singers.store');
Route::get('/singers/show/{singer}', [SingerController::class, 'show'])->name('singers.show');
Route::get('/singers/edit/{singer}', [SingerController::class, 'edit'])->name('singers.edit');
Route::match(['put', 'patch'], '/singers/{singer}', [SingerController::class, 'update'])->name('singers.update');
Route::delete('singers/{singer}', [SingerController::class, 'destroy'])->name('singers.destroy');

