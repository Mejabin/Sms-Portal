<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\AddContactController;
use App\Http\Controllers\Backend\AddMessageController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\SendMessageController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');



Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-message', [AddMessageController::class, 'addMessageForm'])->name('addMessage');
    Route::post('/post-message', [AddMessageController::class, 'PostMessage'])->name('post.message');
    Route::get('/add-contact', [AddContactController::class, 'AddContactForm'])->name('addContact');
    Route::post('/post-contact', [AddContactController::class, 'PostContact'])->name('post.contact');

    Route::get('/send-message', [SendMessageController::class, 'sendMessage'])->name('sendMessage');
});
