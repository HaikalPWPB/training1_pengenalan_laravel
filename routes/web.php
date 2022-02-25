<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
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
    return view('welcome');
});

Route::get('/news/{id}', [NewsController::class, 'detailNews']);

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/contact-us', [ContactUsController::class, 'formContactUs'])->name('form-contact-us');
    Route::post('/contact-us', [ContactUsController::class, 'kirimPesan'])->name('kirim-pesan');
});



