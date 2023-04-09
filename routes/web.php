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


// Route::controller(SesiController::class)->group(function(){
//     Route::get('/sesi/{id}','show');
//     Route::get('/whosesi/{id}','showNow');
//     Route::post('/sesi', 'store');
//     Route::put('/sesi/{id}', 'edit');
//     Route::delete('/sesi/{id}', 'destroy');
//     Route::get('/sesi/peserta/{id}', 'showPeserta');

// });

Route::middleware(['auth'])->group(function(){
    Route::controller(BeasiswaController::class)->group(function(){
        Route::get('/beasiswa','index')->name('beasiswa.index');
        Route::post('/beasiswa/','store')->name('beasiswa.store');
        Route::delete('/beasiswa/{beasiswa}','destroy')->name('beasiswa.destroy');

    });
});

// Route::get('/list-beasiswa',[BeasiswaController::class,'index'])->middleware(['auth'])->name('list-beasiswa');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/inputbeasiswa', function () {
    return view('dashboard.index-0');
})->middleware(['auth'])->name('Form-daftar-beasiswa');

// Route::get('/list-beasiswa', function () {
//     return view('dashboard.beasiswa');
// })->middleware(['auth'])->name('list-beasiswa');

Route::get('/list-pendaftar', function () {
    return view('dashboard.list-pendaftar');
})->middleware(['auth'])->name('list-pendaftar');

require __DIR__.'/auth.php';
