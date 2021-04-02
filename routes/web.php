<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('homePage');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contactPage');
Route::post('/contact-us', [FrontendController::class, 'store'])->name('storeContact');
