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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bill-payment', 'HomeController@billpayment')->name('bill-payment');
Route::get('/transactions', 'HomeController@transactions')->name('transactions');
Route::get('/AccountBalance', 'HomeController@AccountBalance')->name('AccountBalance');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('accounts','AccountController');
});
Route::get('/history', 'HistoryController@index')->name('history');
Route::get('/transfer', 'TransferController@index')->name('transfer');
Route::get('/bill', 'BillController@index')->name('bill');
