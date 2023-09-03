<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    // sleep(1);
    return Inertia::render('Home');
});
Route::get('/posts/{slug}', function () {
    // sleep(1);
    return Inertia::render('ShowPost');
});
Route::get('/posts', function () {
    // sleep(1);
    return Inertia::render('Posts');
});
Route::get('/tags', function () {
    // sleep(1);
    return Inertia::render('Tags');
});
Route::get('/about', function () {
    // sleep(1);
    return Inertia::render('About');
});
