<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/about', [AboutController::class, 'about']);
Route::get('/me', [AboutController::class, 'me']);
Route::get('/download/{id}/type/{fileType?}', [FileController::class, 'download']);
Route::get('/invoice/{invoiceId?}', [InvoiceController::class, 'invoice']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/{taskId}', [TaskController::class, 'show']);
Route::get('/demo', [TaskController::class, 'demo']);
Route::get('/download', [TaskController::class, 'download']);
