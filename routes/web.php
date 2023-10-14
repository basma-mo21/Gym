<?php

use App\Models\Coach;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
   
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\GymController::class, 'index'])->name('gym.index');
Route::post('/store', [App\Http\Controllers\GymController::class, 'store'])->name('gym.store')->middleware('auth');
Route::post('/storemessage', [App\Http\Controllers\GymController::class, 'storemessage'])->name('gym.storemessage')->middleware('auth');
Route::get('/redirects' , [ App\Http\Controllers\GymController::class , 'redirects']);
/*Admin */
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/members', [App\Http\Controllers\AdminController::class, 'members'])->name('admin.members');
Route::get('/deletemember/{id}', [App\Http\Controllers\AdminController::class, 'deletemember'])->name('admin.deletemember');
Route::get('/masseges', [App\Http\Controllers\AdminController::class, 'masseges'])->name('admin.masseges');
Route::get('/deletemassege/{id}', [App\Http\Controllers\AdminController::class, 'deletemassege'])->name('admin.deletemassege');
Route::get('/coach', [App\Http\Controllers\AdminController::class, 'coach'])->name('admin.addcoach');
Route::post('/storecoach', [App\Http\Controllers\AdminController::class, 'storecoach'])->name('admin.storecoach');
Route::get('/showcoach', [App\Http\Controllers\AdminController::class, 'showcoach'])->name('admin.showcoach');
Route::get('/delecoach/{id}', [App\Http\Controllers\AdminController::class, 'deletecoach'])->name('admin.deletecoach');
Route::get('/addclass', [App\Http\Controllers\AdminController::class, 'addclass'])->name('admin.addclass');
Route::post('/storeclass', [App\Http\Controllers\AdminController::class, 'storeclass'])->name('admin.storeclass');
Route::get('/showclass', [App\Http\Controllers\AdminController::class, 'showclass'])->name('admin.showclass');
Route::get('/deleclass/{id}', [App\Http\Controllers\AdminController::class, 'deleteclass'])->name('admin.deleteclass');