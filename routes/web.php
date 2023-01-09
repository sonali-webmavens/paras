<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\CompanyController;
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
<<<<<<< Updated upstream
=======
Route::group([
              'prefix'=> '{locale?}', 
              'where'=> ['locale'=> '[a-zA-z]{2}'],
              'middleware'=> ['setlocale'] ],
            function(){

    Route::get('/', function () {
        return view(view:'welcome');
    });
    Route::view('/admin','admin.dashboard');
    
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::resource('/CompanyResource',CompanyController::class)->middleware('auth');
Route::resource('/EmpResource', EmployeController::class)->middleware('auth');
>>>>>>> Stashed changes

Route::resource('EmpResource', EmpController::class)->middleware('auth');
Route::resource('CompanyResource',CompanyController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
