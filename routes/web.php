<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\board\BoardController;

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
    return view('welcome', []);
});



Route::prefix('/board')->group(function() {

    //Route::get('/',  'App\Http\Controllers\board\BoardController@index');
    Route::get('/',  [BoardController::class, 'index']);
    Route::get('/show/{id}', [BoardController::class, 'show']);
    Route::get('/create', [BoardController::class, 'create']);
    Route::post('/store', [BoardController::class, 'store']);

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
