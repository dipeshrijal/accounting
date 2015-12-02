<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function ()
{
	get('/', function(){
		return view('admin.login.index');

	});
	
   	resource('incomes', 'IncomesController');

   	resource('expenditures', 'ExpendituresController');

    resource('categories', 'CategoriesController');

   	get('dashboard', function(){
   		return view('admin.dashboard.index');

   	});
});
