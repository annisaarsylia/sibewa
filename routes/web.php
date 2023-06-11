<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BeasiswaUserController;
use App\Http\Controllers\ListRegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

// Route::get('/tes', function () {
//     dd('portfolio-details');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
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

    Route::POST('/list-pendaftar/ubah-status', [BeasiswaUserController::class, 'ubahStatus'])->name('Form-daftar-beasiswa');
    
    Route::get('/daftar-beasiswa', [BeasiswaUserController::class, 'create'])->name('Form-daftar-beasiswa');
    Route::post('/daftar-beasiswa', [BeasiswaUserController::class, 'store'])->name('Form-daftar-beasiswa-store');
    
    Route::get('/list-pendaftar', [BeasiswaUserController::class, 'view'])->name('Form-daftar-beasiswa-view');
    Route::get('/list-pendaftar/{id}', [BeasiswaUserController::class, 'show'])->name('pendaftar-detail-beasiswa');
    Route::post('/list-pendaftar/{id}', [BeasiswaUserController::class, 'destroy'])->name('Form-daftar-beasiswa-delete');
});

// Route::get('/list-beasiswa',[BeasiswaController::class,'index'])->middleware(['auth'])->name('list-beasiswa');

Route::get('/dashboard', function () {
    if(Auth::user()->role == 4) return redirect('/beasiswa');
    else return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');




// Route::get('/list-pendaftar-admin', [BeasiswaUserController::class, 'view'])->middleware(['auth'])->name('Form-daftar-beasiswa-view-admin');


// Route::get('/list-beasiswa', function () {
//     return view('dashboard.beasiswa');
// })->middleware(['auth'])->name('list-beasiswa');

// Route::get('/detail-pendaftar/{id}', [BeasiswaUserController::class, 'show'])->middleware(['auth'])->name('Form-detail-beasiswa');


// Route::get('/detail-pendaftar', function () {
//     if(Auth::user()->role == 4) return redirect('/beasiswa');
//     return view('dashboard.detail-pendaftar');
// })->middleware(['auth'])->name('detail-pendaftar');

Route::controller(ListRegisterController::class)->name('list-register.')->group(function(){
    Route::get('/list-register','index')->name('index');
    Route::get('/list-register-admin','registeradmin')->name('admin');
    Route::get('/list-register-admin/{id}/edit','edit')->name('edit');
    Route::post('/list-register-admin/update/{id}','update')->name('update');
});



require __DIR__.'/auth.php';
