<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', [UserController::class, 'index'])->middleware(['auth'])->name('profile');
Route::get('/edit-user', [UserController::class, 'edit'])->middleware(['auth'])->name('edit-user');
Route::post('/profileupdate', [UserController::class, 'profileupdate'])->middleware(['auth'])->name('profileupdate');
Route::get('/upload-resume', [UserController::class, 'createForm'])->middleware(['auth']);
Route::post('/upload-resume', [UserController::class, 'fileUpload'])->middleware(['auth'])->name('fileUpload');




require __DIR__.'/auth.php';
