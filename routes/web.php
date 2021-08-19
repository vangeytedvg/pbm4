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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/invoices', function () {
    return view('layouts.budget.invoices');
})->middleware(['auth'])->name('invoices');

Route::get('/plans', function () {
    return view('layouts.budget.plans');
})->middleware(['auth'])->name('plans');

Route::get('/settings', function () {
    return view('layouts.system.settings');
})->middleware(['auth'])->name('settings');



require __DIR__ . '/auth.php';