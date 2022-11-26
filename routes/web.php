<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return view('landing-page', ['title' => 'Home']);
});

Route::get('/find-freelancer', function () {
    return view('find-freelancer', ['title' => 'Find Freelancer']);
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/user', [AdminController::class, 'indexUser'])->name('admin.indexUser');

Route::get('/admin/dashboard/freelancer', [FreelanceController::class, 'indexFreelance'])->name('admin.dashboard.freelance');
Route::get('/admin/dashboard/freelancer/create', [FreelanceController::class, 'createFreelance'])->name('admin.dashboard.freelance.create');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
