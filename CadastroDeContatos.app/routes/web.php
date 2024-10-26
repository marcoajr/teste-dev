<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\contato\contactController;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/listContato', [contactController::class, 'index']);
Route::get('/createContato', [contactController::class, 'create']);
Route::post('/contato/createContato', [contactController::class, 'store'])->name('contato.store');
Route::delete('/contato/{id}', [contactController::class, 'destroy']);
Route::get('/contato/edit/{id}',[contactController::class, 'edit']);
Route::put('/contato/update/{id}',[contactController::class, 'update'])->name('contato.update');
Route::get('/contato/search', [contactController::class,'search'])->name('contato.search');
Route::get('/contato/show/{id}', [ContactController::class, 'show'])->name('contato.show');


