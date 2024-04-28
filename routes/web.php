<?php

use App\Http\Controllers\EmployeeController;
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


Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/', [EmployeeController::class, 'index']);
Route::get('employee/fetch-all', [EmployeeController::class, 'fetchAll'])->name('employee.fetchAll');
Route::get('employee/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employee/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
