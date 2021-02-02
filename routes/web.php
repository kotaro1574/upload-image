<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\ImageListController;

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

Route::get('/form', [UploadImageController::class, "show"])->name("upload_form");
Route::post('/upload', [UploadImageController::class, "upload"])->name("upload_image");
Route::get('/list', [ImageListController::class, "show"])->name("image_list");
