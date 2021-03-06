<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\backend\AdminProfileController;

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// ADMIN ROUTES
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');


// USER ROUTES
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
  $id = Auth::user()->id;
  $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

Route::get('/', [StaticPagesController::class, 'index']);
Route::get('/user/logout', [StaticPagesController::class, 'userLogout'])->name('user.logout');
Route::get('/user/profile', [StaticPagesController::class, 'userProfile'])->name('user.profile');
Route::post('/user/profile/store', [StaticPagesController::class, 'userProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [StaticPagesController::class, 'userChangePassword'])->name('change.password');
Route::post('/user/password/update', [StaticPagesController::class, 'userPasswordUpdate'])->name('user.password.update');