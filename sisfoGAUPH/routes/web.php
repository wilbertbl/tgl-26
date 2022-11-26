<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;

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

Route::resource('admin/categories', 'App\Http\Controllers\Admin\categoriesController');
Route::resource('admin/user-role', 'App\Http\Controllers\Admin\userRoleController');
Route::resource('admin/missing-item-status', 'App\Http\Controllers\Admin\missingItemStatusController');
Route::resource('admin/reservation-status', 'App\Http\Controllers\Admin\reservationStatusController');
Route::resource('admin/schedule', 'App\Http\Controllers\Admin\scheduleController');
Route::resource('admin/attendance', 'App\Http\Controllers\Admin\attendanceController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');
Route::resource('admin/replacement-class', 'App\Http\Controllers\Admin\replacementClassController');
Route::resource('admin/room', 'App\Http\Controllers\Admin\roomController');
Route::resource('admin/location', 'App\Http\Controllers\Admin\locationController');
Route::resource('admin/student', 'App\Http\Controllers\Admin\studentController');
Route::resource('admin/lesson', 'App\Http\Controllers\Admin\lessonController');
Route::resource('admin/missing_item', 'App\Http\Controllers\Admin\missing_itemController');
Route::resource('admin/requested_missing_item', 'App\Http\Controllers\Admin\requested_missing_itemController');

Route::controller(laporanController::class)->group(function () {
    Route::get('admin/laporan/replacement', 'index');
    Route::get('admin/laporan/replacement/pdf', 'cetak_pdf');
});


