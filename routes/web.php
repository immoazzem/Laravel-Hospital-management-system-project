<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\frontend\FrontEndController;
use App\Http\Controllers\backend\UserProfileController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontEndController::class, 'index'] );

// Route::get('/', function () {
//     return view('auth/login');
// });
// Route::get('/login', function () {
//     return view('auth/login');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend/dashboard');
})->name('dashboard');

Route::get('/logout', [SetupController::class, 'logout'] );

Route::resource('/admin/user', UserProfileController::class );

