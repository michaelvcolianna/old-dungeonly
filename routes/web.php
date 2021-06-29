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

Route::view('/', 'welcome')->name('welcome');

Route::redirect('/shadowrun', '/shadowrun/dice');

Route::get('/shadowrun/dice', function() {
    return view('shadowrun.dice');
})->name('shadowrun.dice');

Route::get('/shadowrun/stone', function() {
    return view('shadowrun.stone');
})->name('shadowrun.stone');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
