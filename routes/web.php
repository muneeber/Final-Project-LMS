<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {return view ('welcome');});

Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/users',[AdminController::class,'users'])->name('users')->middleware('Admin');
Route::get('/MakeTeacher/{id}',[AdminController::class,'MakeTeacher'])->name('MakeTeacher')->middleware('Admin');
Route::get('/MakeStudent/{id}',[AdminController::class,'MakeStudent'])->name('MakeStudent')->middleware('Admin');
Route::get('/Delete/{id}',[AdminController::class,'Delete'])->name('Delete')->middleware('Admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
