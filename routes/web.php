<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\MenuController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
//     function () {
//         Route::get('/', function () {
//             return 'halaman admin';
//         });

//         Route::get('profile', function () {
//             return 'halaman profile admin';
//         });
//     });

// //route kasir
// Route::group(['prefix' => 'kasir', 'middleware' => ['auth', 'role:kasir']],
//     function () {
//         Route::get('/', function () {
//             return 'halaman kasir';
//         });

//         Route::get('profile', function () {
//             return 'halaman profile kasir';
//         });
//     });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('admin', function () {
        return view('admin.index');

    })->middleware(['role:admin|pengguna']);

    Route::get('kasir', function () {
        return view('kasir.index');
    })->middleware(['role:kasir']);

    Route::resource('menu', MenuController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('kasir', KasirController::class);
    Route::resource('feedback', FeedbackController::class);
});
