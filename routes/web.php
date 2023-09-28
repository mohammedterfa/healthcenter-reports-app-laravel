<?php

use App\Http\Controllers\AddDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });

    Route::get('data/add_data', [AddDataController::class, 'index'])->name('add_data');
    Route::post('data/store_data', [AddDataController::class, 'store'])->name('store_data');
    Route::get('data/show_data', [AddDataController::class, 'show'])->name('show_data');
    Route::get('data/edit/{id}', [AddDataController::class, 'edit'])->name('data.edit');


    Route::get('/disease/index', [DiseaseController::class, 'index'])->name('disease.index');
    Route::post('/disease/store', [DiseaseController::class, 'store'])->name('disease.store');
    Route::get('/disease/show', [DiseaseController::class, 'show'])->name('disease.show');

});
