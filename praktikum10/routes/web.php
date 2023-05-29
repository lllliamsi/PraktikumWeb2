<?php


// Panggil Controller
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Routing ke dashboard menggunakan controller
Route::get('/dashboard', [DashboardController::class, 'index']);
// Routing ke produk menggunakan controller
Route::get('/produk', [ProdukController::class, 'index']);

// Routing ke home menggunakan controller
Route::get('/home', [HomeController::class, 'index']);
// Routing ke dashboard menggunakan controller
Route::get('/about', [AboutController::class, 'index']);
