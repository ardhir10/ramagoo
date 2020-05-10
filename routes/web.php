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

Auth::routes();
// ----- CLIENT AREA

Route::get('/', function () {
    return view('client_pages.home');
});

// --Registrasi
Route::get('/register', 'User\RegisterController@index')->name('register');

// --Login
Route::get('/login', 'User\LoginController@index')->name('login');

Route::get('/home', function () {
    return view('client_pages.home');
});



// ----- ADMIN AREA


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

    // ------ USERS
    Route::get('users', 'Admin\UserController@index')->name('users');

    // ------ ADMINS
    Route::get('admins', 'Admin\AdminController@index')->name('admins');
    Route::get('admins/create', 'Admin\AdminController@create')->name('admins.create');
    Route::post('admins/store', 'Admin\AdminController@store')->name('admins.store');

    // ------ ADMIN ROLES
    Route::get('admin-roles', 'Admin\AdminRoleController@index')->name('admin_role');
    Route::get('admin-roles/create', 'Admin\AdminRoleController@create')->name('admin_role.create');
    Route::post('admin-roles/store', 'Admin\AdminRoleController@store')->name('admin_role.store');
    Route::get('admin-roles/{id}/delete', 'Admin\AdminRoleController@delete')->name('admin_role.delete');

});


// Route::get('/home', 'HomeController@index')->name('home');
