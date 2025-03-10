<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DdcController;
use App\Http\Controllers\Admin\RakController;
use App\Http\Controllers\Admin\FormatController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\PustakaController;
use App\Http\Controllers\Admin\PenerbitController;
use App\Http\Controllers\Admin\PengarangController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\JenisAnggotaController;
use App\Http\Controllers\KatalogController;

// Route publik
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
    Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
});

/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    // Admin Home
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Management Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resources([
            'raks' => RakController::class,
            'ddc' => DdcController::class,
            'format' => FormatController::class,
            'penerbit' => PenerbitController::class,
            'pengarang' => PengarangController::class,
            'jenis_anggota' => JenisAnggotaController::class,
            'anggota' => AnggotaController::class,
            'pustaka' => PustakaController::class,
            'transaksi' => TransaksiController::class,
        ]);
    });
});
