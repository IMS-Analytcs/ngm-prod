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
// Route::get('login', 'Auth\LoginController@index')->name('login');
// Route::post('login', 'Auth\LoginController@authenticate');

Route::get('fix/price', 'PartNumbersController@fixPrice');
Route::get('add/expenses', 'PartNumbersController@addExpenseAllPn');

//Auth Route precisa está habilitado para funcionar login Ldap
Auth::routes();

Route::get('quotes-pdf/{id}', 'QuotesController@pdf')->name('quotes.pdf');
Route::get('ver-modelo-pdf', function () {
    return view('Quotes.pdf');
});
Route::get('partNumbers-pdf/{id}', 'PartNumbersController@pdf')->name('partNumbers.pdf');

Route::post('logout', 'Auth\LoginController@logout');

Route::prefix('/')->middleware('perfil')->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('order', 'OrderController@index')->name('order');

    Route::get('orderquoteview/{id}', 'OrderController@orderQuoteView')->name('orderquoteview');

    //COTAÇÃO
    Route::get('quotes', 'QuotesController@index')->name('quotes');
    Route::get('newquote', 'QuotesController@create')->name('newquote');
    Route::get('editquote/{id}', 'QuotesController@edit')->name('editquote');
    Route::get('editpsc/{id}', 'QuotesController@editPsc')->name('editpsc');
    Route::put('updatequote/{id}', 'QuotesController@update')->name('updatequote');
    Route::post('addquote', 'QuotesController@store')->name('addquote');
    Route::get('/editListPartNumberInQuotes/{id}', 'QuotesController@editListPartNumberInQuotes')->name('quote.partNumber');
    Route::post('editquotestatus/{id}', 'QuotesController@editStatusQuotes')->name('editquotestatus');
    Route::post('statusorder/{id}', 'QuotesController@StatusOrder')->name('statusorder');
    Route::get('/getexpensesquote/{id}', 'QuotesController@getExpensesQuote')->name('getexpensesquote');
    Route::get('/ajax/info/quote/{id}', 'QuotesController@ajaxInfoQuote')->name('ajaxQuoteInfo');

    Route::match(['get', 'post'], 'quotes/historic/{id}', 'QuotesController@historic')->name('quotes.historic');
    Route::get('quotes/historic/edit/{id}', 'QuotesController@historicedit')->name('quotes.historic.edit');
    // Route::match(['get', 'post'], 'quotes/historic/edit/{id}', 'QuotesController@historicedit')->name('quotes.historic.edit');

    //Despesas
    Route::get('expenses', 'ExpensesController@index')->name('expenses.list');
    Route::post('expenses', 'ExpensesController@create')->name('expenses.create');
    Route::put('expenses/{id}', 'ExpensesController@edit')->name('expenses.edit');
    Route::get('expenses/{id}', 'ExpensesController@update')->name('expenses.update');
    Route::get('expenses/partnumber/{idPartnumber}', 'ExpensesController@expensePartNumber')->name('expenses.partnumber');
    Route::get('regional/expenses', 'ExpensesController@getExpensesRegional')->name('expenses.regional');

    //BUSf
    Route::get('BUs', 'BUsController@index')->name('BUs');
    Route::post('BUs', 'BUsController@store')->name('BUs.store');
    Route::match(['get', 'post'], 'BUs/{id}', 'BUsController@edit')->name('BUs.edit');
    Route::put('BUs/update/{id}', 'BUsController@update')->name('BUs.update');

    //PartNumbers
    Route::get('partNumbers', 'PartNumbersController@index')->name('partNumbers.list');
    Route::get('formPartNumber', 'PartNumbersController@formPartNumber')->name('partNumbers.form');
    Route::post('partNumbers', 'PartNumbersController@create')->name('partNumbers.create');
    Route::get('formPartNumber/{id}', 'PartNumbersController@edit')->name('partNumbers.edit');
    Route::post('partNumbers/{id}', 'PartNumbersController@updatePN')->name('partNumbers.updatePN');
    Route::get('partNumbers/{id}', 'PartNumbersController@update')->name('partNumbers.update');

    Route::match(['get', 'post'], 'partNumbers/historic/{id}', 'PartNumbersController@historic')->name('partNumbers.historic');
    Route::match(['get', 'post'], 'partNumbers/historic/edit/{id}', 'PartNumbersController@historicedit')->name('partNumbers.historic.edit');

    Route::get('/visualizar-psc/{id}', 'PSCController@visualizarpsc')->name('psc.visualizarpsc');
    Route::post('/listExpensesInQuote', 'ExpensesController@listExpensesInQuote')->name('expenses.listExpensesInQuote');

    Route::post('/listPartNumbersQuotes', 'PartNumbersController@listPartNumberInQuote')->name('partNumbers.listinquote');
    Route::get('/listExpensesCategory', 'PartNumbersController@listExpensesCategory')->name('partNumber.category');
    Route::get('/seachPartNumberInQuote/{id}', 'PartNumbersController@seachPartNumberInQuote')->name('partNumbers.seachpartnumber');
    Route::get('/seachExpenseCategory/{id}', 'PartNumbersController@seachExpenseCategory')->name('partNumber.searchCategory');
    Route::get('delete/{id}', 'PartNumbersController@deleteExpenseCategory')->name('partNumbers.deleteCategory');
    Route::get('file/{id}', 'PartNumbersController@downloadFile')->name('partNumbers.downloadFile');
    //grupos
    Route::get('groups', 'GroupController@index')->name('group.list');
    Route::post('groups', 'GroupController@store')->name('groups.store');
    Route::match(['get', 'post'], 'group-update/{id}', 'GroupController@update')->name('groups.update');
    Route::put('group-editar/{id}', 'GroupController@edit')->name('groups.edit');

    //Fabricantes
    Route::get('Fabricante', 'FabricanteController@index')->name('Fabricante.list');
    Route::post('Fabricante', 'FabricanteController@store')->name('Fabricante');
    // Route::match(['get', 'post'], 'fabricantes/{id}', 'FabricanteController@edit')->name('fabricante.edit'); //atualiza o fabricante
    //Route::get('fabricantes/{id}', 'FabricanteController@update')->name('fabricante.update'); //atualiza o status active
    Route::get('tipo-fabricante', 'FabricanteController@getipofabricante')->name('gettipofabricante');
    Route::put('fabricantes/{id}', 'FabricanteController@edit')->name('fabricante.edit');
    Route::get('fabricantes/{id}', 'FabricanteController@update')->name('fabricante.update');

    //Familia
    Route::get('Familia', 'FamiliaController@index')->name('Familia.list');
    Route::post('Familia', 'FamiliaController@store')->name('Familia');
    Route::match(['get', 'post'], 'Familia/{id}', 'FamiliaController@edit')->name('familia.edit'); //atualiza o fabricante
    Route::get('Familia/{id}', 'FamiliaController@update')->name('Familia.update'); //atualiza o status active

    //TIPO PARTNUMBER
    Route::get('PartnumberType', 'TypePartnumberContrller@index')->name('PartnumberType.list');
    Route::post('PartnumberType', 'TypePartnumberContrller@store')->name('PartnumberType.store');
    Route::post('PartnumberType/{id}', 'TypePartnumberContrller@update')->name('PartnumberType.update');
    Route::get('PartnumberType/{id}/status', 'TypePartnumberContrller@edit')->name('PartnumberType.edit');;

    //retorna um json dos fabricantes
    Route::get('lista-fabricantes', 'FabricanteController@getfabricante')->name('getfabricante');

    Route::get('Tipo', 'TipoController@index')->name('Tipo');

    Route::get('psc-pendente', 'PSCController@pendente')->name('psc.pendente');
    Route::get('psc-finalizado', 'PSCController@finalizado')->name('psc.finalizado');

    Route::get('newpsc/{id}', 'PSCController@create')->name('newpsc');
    // Route::get('psc/{id}', 'PSCController@create')->name('psc');

    Route::post('psc', 'PSCController@store')->name('psc.store');

    Route::get('psc/delete/{id}', 'PSCController@destroy')->name('psc.destroy');
    Route::post('psc/edit/{id}', 'PSCController@edit')->name('psc.edit');

    Route::post('psc/status/{id}', 'PSCController@editStatusPSC')->name('psc.editstatus');

    Route::post('psc/psc-cotacao', 'PSCController@pscCotacao')->name('psc.cotacao');
});
Route::fallback(function () {
    return view('error');
});