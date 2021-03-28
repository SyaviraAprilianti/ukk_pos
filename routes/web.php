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
    return view('landingpage');
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

// Route::get('/promo ', function () {
//     return view('content.library.promo ');
// });

Route::get('/summary', function () {
    return view('content.inventory.summary');
});







// Route::get('/customerslist', function () {
//     return view('content.customers.customers_list');
// });

// Route::get('/sales', function () {
//     return view('content.report.sales');
// });

// Route::get('/shift', function () {
//     return view('content.report.shift');
// });




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

Route::get('/loginnya', function () {
    return view('content.login');
});

Route::get('/registernya', function () {
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
Route::get('/itemlibrary', 'libraryController@index');
Route::post('/create/library', 'libraryController@create');
Route::get('/update/library{id}', 'libraryController@editlb')->name('editlb');
Route::put('/edititem', 'libraryController@edits')->name('edits')->name('edits');
Route::get('/library/hapus/{id}', 'libraryController@delete');

//suppliers
Route::get('/suppliers', 'inventoryController@inven')->name('inven');
Route::post('/create/suppliers', 'inventoryController@create')->name('create');
Route::get('/update/suppliers/{id}', 'inventoryController@editsup')->name('editsup');
Route::put('/edits', 'inventoryController@edits')->name('edits');
Route::get('/supplier/hapus/{id}', 'inventoryController@delete')->name('delete');

//outlet
Route::get('/outlet', 'outletController@outlet')->name('outlet');
Route::post('/create/outlet', 'outletController@create')->name('create');
Route::get('/update/outlet/{id}', 'outletController@editoutlet')->name('editoutlet');
Route::put('/editoutlet', 'outletController@edits')->name('edits')->name('edits');
Route::get('/outlet/hapus/{id}', 'outletController@delete')->name('delete');

//taxes
// Route::get('/taxes', 'taxesController@taxes')->name('taxes');
// Route::post('/create/taxes', 'taxesController@create')->name('create');
// Route::get('/update/taxes/{id}', 'taxesController@edittax')->name('edittax');
// Route::put('/editcc', 'taxesController@editcc')->name('editcc');
// Route::get('/taxes/hapus/{id}', 'taxesController@delete')->name('delete');

//gratuity
Route::get('/gratuity', 'gratuityController@gratuity');
Route::post('/create/gratuity', 'gratuityController@create');
Route::get('/update/gratuity/{id}', 'gratuityController@editgrat')->name('editgrat');
Route::put('/editgratuity', 'gratuityController@editgratuity')->name('editgratuity');
Route::get('/gratuity/hapus/{id}', 'gratuityController@delete');

//categories
Route::get('/categories', 'categoriesController@categories');
Route::post('/create/categories', 'categoriesController@create')->name('create');
Route::get('/update/categories/{id}', 'categoriesController@edit')->name('edit');
Route::put('/editcat', 'categoriesController@edits')->name('edits')->name('edits');
Route::get('/categories/hapus/{id}', 'categoriesController@delete')->name('delete');

//discount
Route::get('/discount', 'discountController@discount');
Route::post('/create/discount', 'discountController@create');
Route::get('/update/discount{id}', 'discountController@editdis')->name('editdis');
Route::put('/editdisc', 'discountController@editdisc')->name('editdisc');
Route::get('/discount/hapus/{id}', 'discountController@delete');

//Brands
// Route::get('/brands', 'BrandsController@brands');
// Route::post('/create/brands', 'BrandsController@create');
// Route::get('/update/brands/{id}', 'BrandsController@editB')->name('edit');
// Route::put('/editBrands', 'BrandsController@editBrands')->name('editBrands');
// Route::get('/brands/hapus/{id}', 'BrandsController@delete');

//modifiers
Route::get('/modifiers', 'modifiersController@modifiers');
Route::post('/create/modifiers', 'modifiersController@create');
Route::get('/update/modifiers/{id}', 'modifiersController@editmod')->name('editmod');
Route::put('/editm', 'modifiersController@edits')->name('edits');
Route::get('/modifiers/hapus/{id}', 'modifiersController@delete');

//sales type
Route::get('/salestype', 'salestypeController@salestype');
Route::post('/create/salestype', 'salestypeController@create');
Route::get('/update/salestype/{id}', 'salestypeController@editST')->name('edit')->name('edit');
Route::put('/editSal', 'salestypeController@editSal')->name('editSal');
Route::get('/salestype/hapus/{id}', 'salestypeController@delete');

// kasirpos
Route::get('/order', 'kasirController@index');
Route::post('/carshier', 'KasirController@store');
Route::get('/makanan', 'kasirController@makanan');
Route::get('/minuman', 'kasirController@minuman');
Route::get('/dessert', 'kasirController@dessert');
Route::get('/beli', 'kasirController@beli');
Route::get('/modif/{category}', 'kasirController@modifiers')->name('modifiers');


//midtrans
Route::post('/payment', 'MidtransController@getSnapToken')->name('payment');
Route::post('/transaction', 'MidtransController@transaction')->name('transaction');
Route::post('/transaction_item', 'MidtransController@transaction_item')->name('transaction_item');

//export pdf
Route::get('/categories/cetak_pdf', 'categoriesController@cetak_pdf');
Route::get('/library/cetak_pdf', 'libraryController@cetak_pdf');
Route::get('/suppliers/cetak_pdf', 'inventoryController@cetak_pdf');
Route::get('/trans/cetak_pdf', 'transController@cetak_pdf');

//export Excel
Route::get('/itemlibrary/export_excel', 'libraryController@export_excel');
Route::get('/category/export_excel', 'categoriesController@export_excel');
Route::get('/suppliers/export_excel', 'inventoryController@export_excel');
Route::get('/trans/export_excel', 'transController@export_excel');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//dashboard admin
Route::get('/admin', 'HomeController@dashboardAdmin')->name('dashboardadmin');

//dashboard kasir
Route::get('/kasir', 'HomeController@dashboardKasir')->name('dashboardkasir');

Route::get('gmaps', 'HomeController@gmaps');

// report
Route::get('/transaksi', 'transController@index')->name('index');