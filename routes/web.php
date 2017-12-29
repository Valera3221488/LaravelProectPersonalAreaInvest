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

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', 'HomeController@index');

    Route::get('/withdraw','WithdrawController@index');

    Route::get('/deposit','DepositController@index');

    Route::get('/edit','EditAccountController@index');



    Route::get('/YourDeposits','DepositController@show');
    Route::get('/YourWithdraws','WithdrawController@show');
    Route::get('/allhistory','EarningHistoryController@show');
    Route::get('/YourRefferals','RefferalsController@show');
    Route::get('/HistoryOfYourDeposits','DepositController@history');

    Route::post('/webmoney/result', 'WebMoneyMerchantController@payOrderFromGate');
    Route::get('/webmoney/result',  'WebMoneyMerchantController@payOrderFromGateOK');








                          //*********** TESTING WEBMONEY API ****************////


    Route::any('/success',function (){

        return view('vendor.webmoney-merchant.success');
    });

    Route::any('/fail',function (){

        return view('vendor.webmoney-merchant.fail');
    });
    Route::any('/pay',function(){

        return view('vendor.webmoney-merchant.payment_form');
    });


                               //*********** TESTING WEBMONEY API *****************///
