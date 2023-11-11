<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthLogoutController;

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
//Auth::routes();
// Route::get('/candidate_login', [App\Http\Controllers\CandidateAuthController::class, 'index'])->name('candidate.login');
// Route::get('/recruiter_login', [App\Http\Controllers\RecruiterAuthController::class, 'index'])->name('recruiter.login');
Route::get('/', [App\Http\Controllers\UserAuthController::class, 'index'])->name('admin.login');

// Route::get('/candidate_register', [App\Http\Controllers\CandidateAuthController::class, 'register_form'])->name('candidate.register');
// Route::get('/recruiter_register', [App\Http\Controllers\RecruiterAuthController::class, 'register_form'])->name('recruiter.register');
Route::get('/admin_register', [App\Http\Controllers\UserAuthController::class, 'register_form'])->name('admin.register');



Route::group(['prefix' => '/auth', 'as' => 'auth.'], function () {

    Route::post('/admin_login', [App\Http\Controllers\UserAuthController::class, 'login'])->name('admin.login');
    

    Route::post('/admin_register', [App\Http\Controllers\UserAuthController::class, 'register'])->name('admin.register');
    

    
});
// This is a protected group route for auth:guard('web') custom middleware
Route::group(['middleware' => 'redirectifnotadmin'], function () {

    Route::group(['prefix' => '/auth/admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');;
        Route::post('/task', 'App\Http\Controllers\AdminController@create_new_task');
        Route::get('/fetch_all_task', 'App\Http\Controllers\AdminController@fetch_all_task');
        Route::put('/task/{id}', 'App\Http\Controllers\AdminController@update_task');
        Route::delete('/task/{id}', 'App\Http\Controllers\AdminController@delete_task');

    });
    
});


Route::get('/logout', [AuthLogoutController::class, 'logout'])->name('logout');

// Route::get('/', function () {
//     return view('welcome');
// });
