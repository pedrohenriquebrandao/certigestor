<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidController;

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
    return view('auth.login');
});

Route::get('/validations', [App\Http\Controllers\ValidController::class, 'index'])->name('validations');
Route::get('/validations/create', [App\Http\Controllers\ValidController::class, 'create'])->name('validations.create');
Route::get('/validations/edit/{id}', [App\Http\Controllers\ValidController::class, 'edit'])->name('validations.edit');
Route::get('/validations/show/{id}', [App\Http\Controllers\ValidController::class, 'show'])->name('validations.show');
Route::post('/validations/store', [App\Http\Controllers\ValidController::class, 'store'])->name('validations.store');
Route::get('/validations/destroy/{id}', [App\Http\Controllers\ValidController::class, 'destroy'])->name('validations.destroy');
Route::post('/validations/update/{id}', [App\Http\Controllers\ValidController::class, 'update'])->name('validations.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
