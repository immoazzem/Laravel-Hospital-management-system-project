<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\frontend\FrontEndController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\backend\setup\DepartmentController;
use App\Http\Controllers\backend\setup\FloorController;
use App\Http\Controllers\backend\setup\BedCategoryController;
use App\Http\Controllers\backend\setup\BedController;
use App\Http\Controllers\backend\medicine\MedicineGroupController;


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
Route::get('/admin', function () {
    return view('backend/dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend/dashboard');
})->name('dashboard');

// Backeend Routes
Route::get('/logout', [SetupController::class, 'logout'] );
Route::resource('/admin/user', UserProfileController::class );
Route::resource('/admin/department', DepartmentController::class );
Route::resource('/admin/floor', FloorController::class );
Route::resource('/admin/bedcategory', BedCategoryController::class );
Route::resource('/admin/bed', BedController::class );
Route::resource('/admin/medicinegroup', MedicineGroupController::class );




// Backeend Routes

