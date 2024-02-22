<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

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

Route::get('/', [landingController::class, 'landing']);
Route::get('/login', [landingController::class, 'login'])->name('login');
Route::get('/user/dashboard', [landingController::class, 'userDashboard'])->name('dashboard.userDashboard.template');