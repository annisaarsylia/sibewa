<?php

use App\Http\Controllers\BeasiswaController;
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
    return view('index');
});
Route::get('/detail-beasiswa', function () {
    return view('portfolio-details');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/inputbeasiswa', function () {
    return view('dashboard.index-0');
})->middleware(['auth'])->name('Form-daftar-beasiswa');

// Route::get('/list-beasiswa', function () {
//     return view('dashboard.beasiswa');
// })->middleware(['auth'])->name('list-beasiswa');
Route::get('/list-beasiswa',[BeasiswaController::class,'index'])->middleware(['auth'])->name('list-beasiswa');

Route::get('/list-pendaftar', function () {
    return view('dashboard.list-pendaftar');
})->middleware(['auth'])->name('list-pendaftar');

require __DIR__.'/auth.php';
