<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::post('/form_submit', [TestController::class, 'Question1']);
Route::get('/response', [TestController::class, 'Question4']);
Route::post('/file', [TestController::class, 'Question5']);
Route::post('/submit', [TestController::class, 'Question7']);
