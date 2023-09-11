<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\ProgresController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('content/newhome');
});
Route::get('/newhome', function () {
    return view('content/newhome');
});

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);


Route::get('/main', function () {
    return view('layout.main');
});


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/daerah-irigasi/create', [PenerimaController::class, 'create']);
Route::post('/dashboard/daerah-irigasi/create', [PenerimaController::class, 'store']);

// Route::get('/dashboard/daerah-irigasi', [PenerimaController::class, 'index']);
// Route::get('/dashboard/daerah-irigasi/{id}/edit', [PenerimaController::class, 'edit']);
// Route::post('/dashboard/daerah-irigasi/{id}', [PenerimaController::class, 'update']);
// Route::DELETE('/dashboard/daerah-irigasi/{id}', [PenerimaController::class, 'destroy']);

Route::resource('/dashboard/daerah-irigasi', PenerimaController::class);
// Route::resource('/dashboard/update/perkembangan-daerah-irigasi', ProgresController::class);

Route::get('/dashboard/update/perkembangan-daerah-irigasi/{id}', [ProgresController::class, 'create']);
Route::post('/dashboard/update/perkembangan-daerah-irigasi/{id}', [ProgresController::class, 'store']);

//=================== Perlu Login =============================

Route::middleware(['auth'])->group(function () {



});
