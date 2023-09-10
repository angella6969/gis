<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\inputController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\updateProgresController;
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

Route::get('/', function () {
    return view('content/newhome');
});
Route::get('/newhome', function () {
    return view('content/newhome');
});

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/map', [MapController::class, 'showMap']);

Route::get('/qgis2webmap', function () {
    return view('content.qgis2webmap');
});
Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/map-preview', [MapController::class, 'preview'])->name('map.preview');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/create', [inputController::class, 'create']);
Route::get('/dashboard/daerah-irigasi', [inputController::class, 'index']);

Route::get('/dashboard/update/perkembangan-daerah-irigasi', [updateProgresController::class, 'create']);
Route::post('/dashboard/update/perkembangan-daerah-irigasi', [updateProgresController::class, 'store']);

//=================== Perlu Login =============================

Route::middleware(['auth'])->group(function () {



});
