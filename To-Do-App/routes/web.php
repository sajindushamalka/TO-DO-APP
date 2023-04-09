<?php

use Illuminate\Support\Facades\Route;

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
})->name('frontend');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'display'])->name('home');

Auth::routes();

Route::get('/activity/add', [App\Http\Controllers\HomeController::class, 'display'])->name('home');
Route::get('/home/1', [App\Http\Controllers\HomeController::class, 'index'])->name('activity.add');
Route::post('/activity/store', [App\Http\Controllers\ActivityCOntroller::class, 'stroe'])->name('activity.store');
Route::get('/activity/display', [App\Http\Controllers\HomeController::class, 'display'])->name('activity.display');
Route::get('/activity/{userId}/displayOne', [App\Http\Controllers\ActivityCOntroller::class, 'show'])->name('activity.displayOne');
Route::get('/activity/{userId}/edit', [App\Http\Controllers\ActivityCOntroller::class, 'edit'])->name('activity.edit');
Route::post('/activity/{userId}/update', [App\Http\Controllers\ActivityCOntroller::class, 'update'])->name('activity.update');
Route::get('/activity/{userId}/delete', [App\Http\Controllers\ActivityCOntroller::class, 'delete'])->name('activity.delete');

Route::post('/note/store', [App\Http\Controllers\noteController::class, 'store'])->name('note.store');
Route::get('/note', [App\Http\Controllers\noteController::class, 'display'])->name('note.home');
Route::get('/note/{userid}/one', [App\Http\Controllers\noteController::class, 'displayOne'])->name('note.one');
Route::get('/note/{userid}/redirectUpdate', [App\Http\Controllers\noteController::class, 'edit'])->name('note.updateFile');
Route::post('/note/{userid}/update', [App\Http\Controllers\noteController::class, 'updateNote'])->name('note.update');
Route::get('/note/{userid}/delete', [App\Http\Controllers\noteController::class, 'deleteNote'])->name('note.delete');