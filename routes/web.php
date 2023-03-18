<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'index']);
Route::post('/add', [EmployeeController::class, 'store']);
Route::get('/employess/view', [EmployeeController::class, 'index']);
Route::get('/Add_employee', [EmployeeController::class, 'add_view']);
// Route::get('/', function () {
    // return view('welcome');
// });
