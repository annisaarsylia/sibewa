<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BeasiswaUserController;
use App\Http\Controllers\ListRegisterController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/detail-beasiswa', function () {
    return view('portfolio-details');
});
Route::get('/', function () {
    return view('index');
});

// Route::controller(SesiController::class)->group(function(){
//     Route::get('/sesi/{id}','show');
//     Route::get('/whosesi/{id}','showNow');
//     Route::post('/sesi', 'store');
//     Route::put('/sesi/{id}', 'edit');
//     Route::delete('/sesi/{id}', 'destroy');
//     Route::get('/sesi/peserta/{id}', 'showPeserta');

// });

Route::controller(BeasiswaController::class)->group(function(){
    Route::get('/beasiswa','index')->name('beasiswa.index');
    // Route::get('/beasiswa/edit/{id}','edit')->name('beasiswa.edit');
    Route::get('/beasiswa/detail/{id}','detail')->name('beasiswa.detail-beasiswa');
    Route::get('/','test');
    // Route::post('/beasiswa/','store')->name('beasiswa.store');
    // Route::post('/beasiswa/update/{id}','update')->name('beasiswa.update');
    // Route::post('/beasiswa/detail/{id}','detail-beasiswa')->name('beasiswa.detail');
    // Route::delete('/beasiswa/{beasiswa}','destroy')->name('beasiswa.destroy');

});

Route::middleware(['auth'])->group(function(){
    Route::controller(BeasiswaController::class)->group(function(){
        // Route::get('/beasiswa','index')->name('beasiswa.index');
        Route::get('/beasiswa/edit/{id}','edit')->name('beasiswa.edit');
        // Route::get('/beasiswa/detail/{id}','detail')->name('beasiswa.detail-beasiswa');
        Route::post('/beasiswa/','store')->name('beasiswa.store');
        Route::post('/beasiswa/update/{id}','update')->name('beasiswa.update');
        // Route::post('/beasiswa/detail/{id}','detail-beasiswa')->name('beasiswa.detail');
        Route::delete('/beasiswa/{beasiswa}','destroy')->name('beasiswa.destroy');

    });
});

// Route::get('/list-beasiswa',[BeasiswaController::class,'index'])->middleware(['auth'])->name('list-beasiswa');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/daftar-beasiswa', [BeasiswaUserController::class, 'create'])->middleware(['auth'])->name('Form-daftar-beasiswa');
Route::post('/daftar-beasiswa', [BeasiswaUserController::class, 'store'])->middleware(['auth'])->name('Form-daftar-beasiswa-store');

Route::get('/list-pendaftar', [BeasiswaUserController::class, 'view'])->middleware(['auth'])->name('Form-daftar-beasiswa-view');
Route::get('/list-pendaftar-admin', [BeasiswaUserController::class, 'view'])->middleware(['auth'])->name('Form-daftar-beasiswa-view-admin');


// Route::get('/list-beasiswa', function () {
//     return view('dashboard.beasiswa');
// })->middleware(['auth'])->name('list-beasiswa');

Route::get('/detail-pendaftar', function () {
    return view('dashboard.detail-pendaftar');
})->middleware(['auth'])->name('detail-pendaftar');

Route::controller(ListRegisterController::class)->group(function(){
    Route::get('/list-register','index');
});


require __DIR__.'/auth.php';
