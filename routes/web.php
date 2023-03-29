<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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

Route::get('/find-work', [WorkController::class, 'pageWork'])->name('find.Work');

// Login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

// Register
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

// Edit User
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/user', [AdminController::class, 'indexUser'])->name('admin.indexUser');
Route::post('/admin/update/{user}', [AdminController::class, 'updateUser'])->name('admin.update');

//Chat
Route::get('/chat', [MessageController::class, 'index'])->name('chat');
Route::get('/chats', [MessageController::class, 'fetchMessage'])->name('fetchMessages');
Route::post('/chats', [MessageController::class, 'sendMessage'])->name('sendMessage');

Route::get('/admin/dashboard/freelancer', [FreelanceController::class, 'indexFreelance'])->name('admin.dashboard.freelance');
Route::get('/admin/dashboard/freelancer/create', [FreelanceController::class, 'createFreelance'])->name('admin.dashboard.freelance.create');
Route::post('/admin/dashboard/freelancer/store', [FreelanceController::class, 'storeFreelance'])->name('admin.dashboard.freelance.store');
Route::post('/admin/dashboard/freelancer/update/{id}', [FreelanceController::class, 'updateFreelance'])->name('admin.dashboard.freelance.update');
Route::post('/admin/dashboard/freelancer/delete/{freelance}', [FreelanceController::class, 'deleteFreelance'])->name('admin.dashboard.freelance.delete');
Route::get('/find-freelancers', [FreelanceController::class, 'indexFindFreelance'])->name('find.freelance');
Route::get('/find-freelancer', [FreelanceController::class, 'findFreelance'])->name('find-freelancer');


Route::get('/admin/work', [WorkController::class, 'indexWork'])->name('admin.dashboard.work');
Route::get('/admin/work/create', [WorkController::class, 'createWork'])->name('admin.work.create');
Route::post('/admin/work/store', [WorkController::class, 'storeWork'])->name('admin.work.store');
Route::post('/admin/work/update/{work}', [WorkController::class, 'updateWork'])->name('admin.work.update');
Route::post('/amdin/work/delete/{work}', [WorkController::class, 'deleteWork'])->name('admin.work.delete');
Route::get('/find/work', [WorkController::class, 'findWork'])->name('find.works');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
