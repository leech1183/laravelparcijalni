<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo_list;
use App\Http\Controllers\TodoListController;

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

Route::get('dashboard/profile', [ProfileController::class, 'index']);

Route::get('/',[TodoListController::class, 'index']);

Route::get('create', [TodoListController::class, 'create']);

Route::get('spremi', [TodoListController::class, 'store']);

Route::get('delete/{id}', [TodoListController::class, 'destroy']);


