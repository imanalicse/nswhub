<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/order-list', 'PagesController@orderList');
//Route::get('/customer-list', 'PagesController@customerList');
Route::resource('categories', 'CategoriesController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('profile', function () {
    // Only authenticated users may enter...
    Route::get('/customer-list', 'PagesController@customerList');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('users', function () {
            echo "Usersss";
        });
    });
});

Route::group(['namespace'=> 'Admin', 'prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/', function() {
        echo "Dashboard";
    });

    Route::get('/customer-list', 'CustomersController@index');
});