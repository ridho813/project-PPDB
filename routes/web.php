<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardAdmin;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\QuisionerController;
use App\Http\Controllers\Admin\SeleksiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KalenderController;

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

Auth::routes();

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(
    function () {
        Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');

        Route::resource('quisioner', QuisionerController::class);
        Route::put('quisioner', [QuisionerController::class, 'index'])->name('quisioner');
        Route::get('quisioner', [QuisionerController::class, 'index'])->name('quisioner');
        Route::delete('quisioner', [QuisionerController::class, 'destroy'])->name('quisioner');

        Route::resource('seleksi', SeleksiController::class);
        Route::put('seleksi', [SeleksiController::class, 'index'])->name('seleksi');
        Route::get('seleksi', [SeleksiController::class, 'index'])->name('seleksi');
        Route::delete('seleksi', [SeleksiController::class, 'destroy'])->name('seleksi');

        Route::get('/kalender', [KalenderController::class, 'index']);
        Route::get('/tambah_kalender', [KalenderController::class, 'tambah']);
        Route::post('/post_kalender', [KalenderController::class, 'create'])->name('kalender');
        Route::get('/destroy/{id}', [KalenderController::class, 'destroy'])->name('destroy');
        Route::post('/update/{id}', [KalenderController::class, 'update']);
        Route::get('/edit/{id}', [KalenderController::class, 'edit']);
    }
);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/daftar', [SiswaController::class, 'index'])->name('daftar.index');
Route::post('/daftar', [SiswaController::class, 'store'])->name('daftar.create');
Route::get('/result/{id}', [SiswaController::class, 'show'])->name('daftar.shows');

// Route::get('/admins', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
// Route::post('/admins', [LoginController::class, 'adminLogin'])->name('admin.login');

// Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

// Route::get('/admin/dashboard', function () {
//     return view('admin.index');
// })->middleware('auth:admin');
