<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'index'])->name('welcome');
Route::get('/regions/{id}', [MemberController::class, 'show'])->name('regions');
Route::get('/inscription', [MemberController::class, 'create'])->name('members.create');
Route::post('/inscription', [MemberController::class, 'store'])->name('members.store');
Route::get('/member', [MemberController::class, 'edite'])->name('members.edite');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
