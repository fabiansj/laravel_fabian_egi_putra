<?php

use App\Http\Controllers\AuthController;
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

//login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');
Route::get('datapasien', [AuthController::class, 'showDataPasien'])->name('tampilpasien');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login']);

//CRUD or Dashboard
Route::get('/addpasien', [AuthController::class, 'showCreateDataPasien'])->name('tambahdatapasien');
Route::get('/addrumahsakit', [AuthController::class, 'showCreateDataRumahSakit'])->name('tampildatarumahsakit');
Route::get('/editrumahsakit/{id}', [AuthController::class, 'showEditRS'])->name('tampilEditDataRumahSakit');
// Route::delete('/deleterumahsakit/{id}', [AuthController::class, 'deleteRS'])->name('deleteRS');
Route::delete('/delete-rs/{id}', [AuthController::class, 'deleteRS'])->name('deleteRS');
Route::put('/editrumahsakit/{id}', [AuthController::class, 'editDataRS'])->name('editDataRS');
Route::post('/addrumahsakit', [AuthController::class, 'saveDataRS'])->name('saveDataRS');
Route::post('/addpasien', [AuthController::class, 'saveDataPasien'])->name('saveDataPasien');
