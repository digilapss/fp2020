<?php

Route::get('/',[
	'uses'	=> 'FrontendController@getIndex',
	'as'	=> 'frontend.index'
]);

Route::get('/partnerpage',[
	'uses'	=> 'FrontendController@getPartner',
	'as'	=> 'frontend.partner'
]);

Route::get('/contact',[
	'uses'	=> 'FrontendController@getContact',
	'as'	=> 'frontend.contact'
]);

Route::get('/group/{group_id}',[
	'uses'	=> 'FrontendController@getGroup',
	'as'	=> 'frontend.group'
]);

Route::get('/uevent',[
	'uses'	=> 'FrontendController@getEvent',
	'as'	=> 'frontend.event'
]);

Route::get('/news',[
	'uses'	=> 'FrontendController@getNews',
	'as'	=> 'frontend.news'
]);

Route::get('/news/{news_id}',[
	'uses' 	=> 'FrontendController@getSingleNews',
	'as'	=> 'frontend.news.single'
]);

Route::get('/document',[
	'uses'	=> 'FrontendController@getDocument',
	'as'	=> 'frontend.document'
]);

Route::get('/profile/{profile_id}',[
	'uses'	=> 'FrontendController@getProfile',
	'as'	=> 'frontend.profile'
]);

Route::get('/focal',[
	'uses'	=> 'FrontendController@getFocal',
	'as'	=> 'frontend.focal'
]);

Route::get('/admin/login', [
	'uses' => 'AdminController@getLogin',
	'as' => 'admin.login'
]);

Route::post('/admin/login/post', [
	'uses' => 'AdminController@postLogin',
	'as' => 'admin.login.post'
]);

Route::group([
	'prefix' => '/admin',
	'middleware' => 'auth'
], function(){

	Route::get('/',[
		'uses' => 'AdminController@getIndex',
		'as' => 'admin.index'
	]);

	Route::get('/logout', [
		'uses' => 'AdminController@getLogout',
		'as' => 'admin.logout'
	]);

	//Category Partner
	Route::get('/catpart',[
		'uses' 	=> 'CatpartController@getIndex',
		'as' 	=> 'admin.catpart.index'
	]);

	Route::get('/catpart/create', [
		'uses' 	=> 'CatpartController@getCreate',
		'as' 	=> 'admin.catpart.create'
	]);

	Route::post('/catpart/create', [
		'uses'	=> 'CatpartController@postCreate',
		'as' 	=> 'admin.catpart.post.create'
	]);

	Route::get('/catpart/view/{catpart_id}',[
		'uses' 	=> 'CatpartController@getSingle',
		'as' 	=> 'admin.catpart.view'
	]);

	Route::get('/catpart/edit/{catpart_id}',[
		'uses' 	=> 'CatpartController@getUpdate',
		'as' 	=> 'admin.catpart.edit'
	]);

	Route::post('/catpart/edit/update',[
		'uses' 	=> 'CatpartController@postUpdate',
		'as' 	=> 'admin.catpart.update'
	]);

	Route::get('/catpart/delete/{catpart_id}', [
		'uses' 	=> 'CatpartController@getDelete',
		'as' 	=> 'admin.catpart.delete'
	]);
	//end Category Partner

	//Partner Route
	Route::get('/partner',[
		'uses' 	=> 'PartnerController@getIndex',
		'as' 	=> 'admin.partner.index'
	]);

	Route::get('/partner/create', [
		'uses' 	=> 'PartnerController@getCreate',
		'as' 	=> 'admin.partner.create'
	]);

	Route::post('/partner/create', [
		'uses' 	=> 'PartnerController@postCreate',
		'as' 	=> 'admin.partner.post.create'
	]);

	Route::get('/partner/view/{partner_id}',[
		'uses' 	=> 'PartnerController@getView',
		'as' 	=> 'admin.partner.view'
	]);

	Route::get('/partner/edit/{partner_id}',[
		'uses' 	=> 'PartnerController@getUpdate',
		'as' 	=> 'admin.partner.edit'
	]);

	Route::post('/partner/edit/update',[
		'uses' 	=> 'PartnerController@postUpdate',
		'as' 	=> 'admin.partner.update'
	]);

	Route::get('/partner/delete/{partner_id}', [
		'uses'	=> 'PartnerController@getDelete',
		'as' 	=> 'admin.partner.delete'
	]);
	//End Partner Route

	//Group Route
	Route::get('/group/view/{group_id}',[
		'uses'	=> 'GroupController@getView',
		'as' 	=> 'admin.group.view'
	]);

	Route::get('/group/edit/{group_id}',[
		'uses' 	=> 'GroupController@getUpdate',
		'as' 	=> 'admin.group.edit'
	]);

	Route::post('/group/edit/update',[
		'uses'	=> 'GroupController@postUpdate',
		'as' 	=> 'admin.group.update'
	]);

	Route::post('/group/edit/update',[
		'uses' 	=> 'GroupController@postUpdate',
		'as' 	=> 'admin.group.update'
	]);
	//End Group Route

	//Member Route
	Route::get('/group/member/create/{group_id}', [
		'uses' 	=> 'MemberController@getCreate',
		'as' 	=> 'admin.member.create'
	]);

	Route::post('/group/member/create', [
		'uses' 	=> 'MemberController@postCreate',
		'as' 	=> 'admin.member.post.create'
	]);

	Route::get('/group/member/edit/{member_id}',[
		'uses' 	=> 'MemberController@getUpdate',
		'as' 	=> 'admin.member.edit'
	]);

	Route::post('/group/member/edit/update',[
		'uses' 	=> 'MemberController@postUpdate',
		'as' 	=> 'admin.member.update'
	]);

	Route::get('/group/member/delete/{member_id}', [
		'uses' 	=> 'MemberController@getDelete',
		'as' 	=> 'admin.member.delete'
	]);
	//End Member Route

	//Docugroup Route
	Route::get('/group/docugroup/create/{group_id}', [
		'uses' 	=> 'DocugroupController@getCreate',
		'as' 	=> 'admin.docugroup.create'
	]);

	Route::post('/group/docugroup/create', [
		'uses' 	=> 'DocugroupController@postCreate',
		'as' 	=> 'admin.docugroup.post.create'
	]);

	Route::get('/group/docugroup/edit/{docugroup_id}',[
		'uses' 	=> 'DocugroupController@getUpdate',
		'as' 	=> 'admin.docugroup.edit'
	]);

	Route::post('/group/docugroup/edit/update',[
		'uses' 	=> 'DocugroupController@postUpdate',
		'as' 	=> 'admin.docugroup.update'
	]);

	Route::get('/group/docugroup/delete/{docugroup_id}', [
		'uses' 	=> 'DocugroupController@getDelete',
		'as' 	=> 'admin.docugroup.delete'
	]);
	//End Docugroup

	//Upcoming Event
	Route::get('/uevent',[
		'uses' 	=> 'UeventController@getIndex',
		'as' 	=> 'admin.uevent.index'
	]);

	Route::get('/uevent/create', [
		'uses'	=> 'UeventController@getCreate',
		'as' 	=> 'admin.uevent.create'
	]);

	Route::post('/uevent/create', [
		'uses' 	=> 'UeventController@postCreate',
		'as' 	=> 'admin.uevent.post.create'
	]);

	Route::get('/uevent/view/{uevent_id}',[
		'uses' 	=> 'UeventController@getSingle',
		'as' 	=> 'admin.uevent.view'
	]);

	Route::get('/uevent/edit/{uevent_id}',[
		'uses' 	=> 'UeventController@getUpdate',
		'as' 	=> 'admin.uevent.edit'
	]);

	Route::post('/uevent/edit/update',[
		'uses'	=> 'UeventController@postUpdate',
		'as' 	=> 'admin.uevent.update'
	]);

	Route::get('/uevent/delete/{uevent_id}', [
		'uses' 	=> 'UeventController@getDelete',
		'as' 	=> 'admin.uevent.delete'
	]);
	//End Upcoming Event

	//Intro
	Route::get('/intro/view',[
		'uses' 	=> 'IntroController@getSingle',
		'as' 	=> 'admin.intro.view'
	]);

	Route::get('/intro/edit/{intro_id}',[
		'uses' 	=> 'IntroController@getUpdate',
		'as' 	=> 'admin.intro.edit'
	]);

	Route::post('/intro/edit/update',[
		'uses' 	=> 'IntroController@postUpdate',
		'as' 	=> 'admin.intro.update'
	]);

	//EndIntro

	//News
	Route::get('/news',[
		'uses'	=> 'NewsController@getIndex',
		'as' 	=> 'admin.news.index'
	]);

	Route::get('/news/create', [
		'uses'	 => 'NewsController@getCreate',
		'as' 	=> 'admin.news.create'
	]);

	Route::post('/news/create', [
		'uses' 	=> 'NewsController@postCreate',
		'as' 	=> 'admin.news.post.create'
	]);

	Route::get('/news/view/{news_id}',[
		'uses' 	=> 'NewsController@getSingle',
		'as' 	=> 'admin.news.view'
	]);

	Route::get('/news/edit/{news_id}',[
		'uses' 	=> 'NewsController@getUpdate',
		'as' 	=> 'admin.news.edit'
	]);

	Route::post('/news/edit/update',[
		'uses' 	=> 'NewsController@postUpdate',
		'as' 	=> 'admin.news.update'
	]);

	Route::get('/news/delete/{news_id}', [
		'uses' 	=> 'NewsController@getDelete',
		'as' 	=> 'admin.news.delete'
	]);
	//end News

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

	//Intro
	Route::get('/profile/view/{profile_id}',[
		'uses' 	=> 'ProfileController@getSingle',
		'as' 	=> 'admin.profile.view'
	]);

	Route::get('/profilr/edit/{profile_id}',[
		'uses' 	=> 'ProfileController@getUpdate',
		'as' 	=> 'admin.profile.edit'
	]);

	Route::post('/profile/edit/update',[
		'uses' 	=> 'ProfileController@postUpdate',
		'as' 	=> 'admin.profile.update'
	]);
	//EndIntro
});