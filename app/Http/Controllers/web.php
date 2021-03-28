<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libraryController;

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
    return view('template.index');
});

Route::get('/template', function () {
    return view('template.index');
});

Route::get('/dash', function () {
    return view('content.dashboard');
});

Route::get('/itemLibrary', function () {
    return view('content.library.item_library');
});

Route::get('/modifiers ', function () {
    return view('content.library.modifiers ');
});

Route::get('/categories ', function () {
    return view('content.library.categories ');
});

Route::get('/promo ', function () {
    return view('content.library.promo ');
});

Route::get('/brands ', function () {
    return view('content.library.brands ');
});


Route::get('/summary', function () {
    return view('content.inventory.summary');
});

Route::get('/ingredient_library', function () {
    return view('content.ingredient.ingredient_library');
});

Route::get('/ingredient_categories', function () {
    return view('content.ingredient.ingredient_categories');
});

Route::get('/recipes', function () {
    return view('content.ingredient.recipes');
});

Route::get('/tablegroup', function () {
    return view('content.table.table_group');
});

Route::get('/tablereport', function () {
    return view('content.table.table_report');
});

Route::get('/recipes', function () {
    return view('content.ingredient.recipes');
});

Route::get('/employeeslots', function () {
    return view('content.employee.employee_slots');
});

Route::get('/pinaccess', function () {
    return view('content.employee.pin_access');
});

Route::get('/customerslist', function () {
    return view('content.customers.customers_list');
});

Route::get('/sales', function () {
    return view('content.report.sales');
});

Route::get('/shift', function () {
    return view('content.report.shift');
});

Route::get('/salestype', function () {
    return view('content.library.sales_type');
});

Route::get('/discount', function () {
    return view('content.library.discount');
});

Route::get('/transaksi', function () {
    return view('content.report.transactions');
});

Route::get('/invoices', function () {
    return view('content.report.invoices');
});

Route::get('/purchase_order', function () {
    return view('content.inventory.purchase_order');
});

Route::get('/transfer', function () {
    return view('content.inventory.transfer');
});

Route::get('/adjustment', function () {
    return view('content.inventory.adjustment');
});

Route::get('/feedback', function () {
    return view('content.customers.feedback');
});

Route::get('/employeeaccess', function () {
    return view('content.employee.employee_access');
});

Route::get('/tablemap', function () {
    return view('content.table.table_map');
});

Route::get('/loyalty_program', function () {
    return view('content.customers.loyalty_program');
});

Route::get('/apps', function () {
    return view('content.apps.apps');
});

Route::get('/capital', function () {
    return view('content.capital.capital');
});

Route::get('/login', function () {
    return view('content.login');
});

Route::get('/register', function () {
    return view('content.register');
});

Route::get('/mobile_payments', function () {
    return view('content.payment.mobile_payments');
});

Route::get('/payment_configuration', function () {
    return view('content.payment.payment_configuration');
});

Route::get('/account', function () {
    return view('content.account.account');
});

Route::get('/billing', function () {
    return view('content.account.billing');
});

Route::get('/billing', function () {
    return view('content.account.billing');
});

Route::get('/bank_account', function () {
    return view('content.account.bank_account');
});

Route::get('/public_profile', function () {
    return view('content.account.public_profile');
});

Route::get('/receipt', function () {
    return view('content.account.receipt');
});

Route::get('/checkout', function () {
    return view('content.account.checkout');
});

Route::get('/email_notification', function () {
    return view('content.account.email_notification');
});

//item library
Route::get('/itemlibrary', 'App\Http\Controllers\libraryController@index');
Route::post('/create/library', 'App\Http\Controllers\libraryController@create');
Route::get('/update/library/{id}', 'App\Http\Controllers\libraryController@editlb')->name('editlb')->name('editlb');
Route::put('/editb', 'App\Http\Controllers\libraryController@editb')->name('editb');
Route::get('/library/hapus/{id}', 'App\Http\Controllers\libraryController@delete');
//suppliers
Route::get('/suppliers', 'App\Http\Controllers\inventoryController@inven');
Route::post('/create/suppliers', 'App\Http\Controllers\inventoryController@create');
Route::get('/update/suppliers/{id}', 'App\Http\Controllers\inventoryController@editsup')->name('edit')->name('edit');
Route::put('/edits', 'App\Http\Controllers\inventoryController@edits')->name('edits');
Route::get('/supplier/hapus/{id}', 'App\Http\Controllers\inventoryController@delete');

//outlet
Route::get('/outlet', 'App\Http\Controllers\outletController@outlet');

//taxes
Route::get('/taxes', 'App\Http\Controllers\taxesController@taxes');
Route::post('/create/taxes', 'App\Http\Controllers\taxesController@create');
Route::get('/update/suppliers/{id}', 'App\Http\Controllers\taxesController@edittax')->name('edittax')->name('edittax');
Route::put('/edittc', 'App\Http\Controllers\taxesController@edittc')->name('edittc');
Route::get('/taxes/hapus/{id}', 'App\Http\Controllers\taxesController@delete');

//gratuity
Route::get('/gratuity', 'App\Http\Controllers\gratuityController@gratuity');
Route::post('/create/gratuity', 'App\Http\Controllers\gratuityController@create');
Route::get('/update/gratuity/{id}', 'App\Http\Controllers\gratuityController@editgra')->name('editgra')->name('editgra');
Route::put('/editgt', 'App\Http\Controllers\gtuityController@editgt')->name('editgt');
Route::get('/gratuity/hapus/{id}', 'App\Http\Controllers\gratuityController@delete');


Route::get('/taxes', 'App\Http\Controllers\taxesController@taxes');