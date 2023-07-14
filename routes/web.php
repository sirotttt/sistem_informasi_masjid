<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardDonasiController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\DashboardKegiatanController;
use App\Http\Controllers\DashboardPengurusController;
use App\Http\Controllers\DashboardInventarisMasjidController;
use App\Http\Controllers\DashboardUsersController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [HomeController::class, 'dashboard']);
        Route::resource('/donasi', DashboardDonasiController::class);
        Route::resource('/inventaris', DashboardInventarisMasjidController::class);
        Route::resource('/jabatan', DashboardJabatanController::class);
        Route::resource('/kegiatan', DashboardKegiatanController::class);
        Route::resource('/pengurus', DashboardPengurusController::class);
        Route::resource('/users', DashboardUsersController::class);
    });
});
