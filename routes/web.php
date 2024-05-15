<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/Halo', function () {
    return view('halo');});

Route::get('/Home', [PageController::class,'home']);

Route::get('/About', [PageController::class,'about']);

Route::get('/Contact', [PageController::class,'contact']);

Route::get('/student',[StudentController::class,'index']);
Route::get('/student/add',[StudentController::class,'add']);
Route::post('/student/addsave',[StudentController::class,'addsave']);
Route::get('/student/edit/{nim}',[StudentController::class,'edit']);
Route::post('/student/editsave',[StudentController::class,'editsave']);
Route::get('/student/delete/{nim}',[StudentController::class,'delete']);
Route::get('/student/search',[StudentController::class,'search']);