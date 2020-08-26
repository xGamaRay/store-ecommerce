<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

########### the prefix of this routes file is in the RouteServiceProvider.php in the mapAdminRoutes #############

// note that the prefix is admin for all file routes in the admin routes
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function (){

    Route::get('/', 'DashboardController@index') -> name('admin.dashboard'); // the first page admin visits if he's authenticated
});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function (){

    Route::get('login', 'LoginController@login') -> name('admin.login');
    Route::post('login', 'LoginController@postLogin') -> name('admin.post.login');
});


