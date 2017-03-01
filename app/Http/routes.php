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

Route::get('/', [
	'uses' => 'FrontendController@getIndex',
	'as' => 'frontend.index'
]);

Route::get('/working', [
	'uses' => 'FrontendController@getWorking',
	'as' => 'frontend.working'
]);

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

	Route::get('/fileentry', [
		'uses' => 'FileEntryController@getIndex',
		'as' => 'admin.fileentry.index'
	]);

	Route::get('/fileentry/get{filename}', [
		'uses' => 'FileEntryController@get',
		'as' => 'admin.fileentry.getentry'
	]);

	Route::post('/fileentry/add',[
		'uses' => 'FileEntryController@add',
		'as' => 'admin.fileentry.addentry'
	]);

	Route::get('/upload', [
			'uses' => 'FileController@getIndex',
			'as' => 'admin.files.index'
	]);

	Route::get('/create', [
			'uses' => 'FileController@getCreate',
			'as' => 'admin.files.create'
	]);

	Route::post('/create', [
			'uses' => 'FileController@postCreate',
			'as' => 'admin.files.post.create'
	]);

	//Category Route
	Route::get('/category',[
		'uses' => 'CategoryController@getIndex',
		'as' => 'admin.category.index'
	]);

	Route::get('/category/create', [
		'uses' => 'CategoryController@getCreate',
		'as' => 'admin.category.create'
	]);

	Route::post('/category/create', [
		'uses' => 'CategoryController@postCreate',
		'as' => 'admin.category.post.create'
	]);

	Route::get('/category/view/{category_id}',[
		'uses' => 'CategoryController@getSingle',
		'as' => 'admin.category.view'
	]);

	Route::get('/category/edit/{category_id}',[
		'uses' => 'CategoryController@getUpdate',
		'as' => 'admin.category.edit'
	]);

	Route::post('/category/edit/update',[
		'uses' => 'CategoryController@postUpdate',
		'as' => 'admin.category.update'
	]);

	Route::get('/category/delete/{category_id}', [
		'uses' => 'CategoryController@getDelete',
		'as' => 'admin.category.delete'
	]);
	//End Category Route

	//Document Route
	Route::get('/document',[
		'uses' => 'DocumentController@getIndex',
		'as' => 'admin.document.index'
	]);

	Route::get('/document/create', [
		'uses' => 'DocumentController@getCreate',
		'as' => 'admin.document.create'
	]);

	Route::post('/document/create', [
		'uses' => 'DocumentController@postCreate',
		'as' => 'admin.document.post.create'
	]);

	Route::get('/document/view/{document_id}',[
		'uses' => 'DocumentController@getSingle',
		'as' => 'admin.document.view'
	]);

	Route::get('/document/edit/{document_id}',[
		'uses' => 'DocumentController@getUpdate',
		'as' => 'admin.document.edit'
	]);

	Route::post('/document/edit/update',[
		'uses' => 'DocumentController@postUpdate',
		'as' => 'admin.document.update'
	]);

	Route::get('/document/delete/{document_id}', [
		'uses' => 'DocumentController@getDelete',
		'as' => 'admin.document.delete'
	]);
	//End Document Route

	//General Route
	Route::get('/general',[
		'uses' => 'GeneralController@getIndex',
		'as' => 'admin.general.index'
	]);

	Route::get('/general/create', [
		'uses' => 'GeneralController@getCreate',
		'as' => 'admin.general.create'
	]);

	Route::post('/general/create', [
		'uses' => 'GeneralController@postCreate',
		'as' => 'admin.general.post.create'
	]);

	Route::get('/general/view/{general_id}',[
		'uses' => 'GeneralController@getView',
		'as' => 'admin.general.view'
	]);

	Route::get('/general/edit/{general_id}',[
		'uses' => 'GeneralController@getUpdate',
		'as' => 'admin.general.edit'
	]);

	Route::post('/general/edit/update',[
		'uses' => 'GeneralController@postUpdate',
		'as' => 'admin.general.update'
	]);

	Route::get('/general/delete/{general_id}', [
		'uses' => 'GeneralController@getDelete',
		'as' => 'admin.general.delete'
	]);
	//End General Route
	
});