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


Route::group([
	'prefix' => '/admin'
], function(){
	Route::get('/',[
		'uses' => 'AdminController@getIndex',
		'as' => 'admin.index'
	]);

	Route::get('/uevent',[
		'uses' => 'UeventController@getIndex',
		'as' => 'admin.uevent.index'
	]);

	Route::get('/uevent/create', [
		'uses' => 'UeventController@getCreate',
		'as' => 'admin.uevent.create'
	]);

	Route::post('/uevent/create', [
		'uses' => 'UeventController@postCreate',
		'as' => 'admin.uevent.post.create'
	]);

	Route::get('/uevent/view/{uevent_id}',[
		'uses' => 'UeventController@getSingle',
		'as' => 'admin.uevent.view'
	]);

	Route::get('/uevent/edit/{uevent_id}',[
		'uses' => 'UeventController@getUpdate',
		'as' => 'admin.uevent.edit'
	]);

	Route::post('/uevent/edit/update',[
		'uses' => 'UeventController@postUpdate',
		'as' => 'admin.uevent.update'
	]);

	Route::get('/uevent/delete/{uevent_id}', [
		'uses' => 'UeventController@getDelete',
		'as' => 'admin.uevent.delete'
	]);


});