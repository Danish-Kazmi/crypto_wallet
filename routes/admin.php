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

// Route::get('/template', function () {
//     return view('template');
// })->name('template');

// Route::get('/', function () {
//     return redirect('login');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('admin/login', function () {
    return view('auth.login');
})->name('admin.login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/lock', function () {
//     return view('auth.lock');
// })->name('lock');

// Route::get('/password-recovery', function () {
//     return view('auth.passwordrecovery');
// })->name('passwordrecovery');
