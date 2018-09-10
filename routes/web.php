<?php



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', 'PagesController@index');
    Route::get('study', 'PagesController@tickets')->name('tickets');
    Route::get('number', 'PagesController@number')->name('number');
    Route::get('exam', 'PagesController@exem')->name('exem');
    Route::get('start', 'PagesController@start')->name('start');
    Route::get('test', 'PagesController@test');
    Route::get('categories', 'PagesController@categories');
    Route::get('signs', 'PagesController@signs');
    Route::get('theorea', 'PagesController@theorea');
    Route::get('practical', 'PagesController@practical');
    Route::get('regulation', 'PagesController@regulation');
    Route::get('gallery', 'PagesController@gallery');
    Route::get('contact', 'PagesController@contact');
    Route::post('contact', 'ContactController@get_message')->name('contact');
    Route::get('blog', 'PagesController@blog');
    Route::get('blog/{id}', 'PagesController@showBlog');
    Route::get('statistic', 'PagesController@statistic');

    Route::get('logout-user', 'PagesController@statistic')->name('l');


    Route::get('seeview', 'PagesController@count')->name('seeview');
    Route::get('like', 'PagesController@like')->name('like');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/{id}/statistic', 'HomeController@userStatistic')->name('userstatistic');
    Route::get('/exercise', 'HomeController@exercise');


    Route::post('/', 'PagesController@register')->name('registeruser');
    Route::get('save', 'PagesController@save')->name('save');

    Route::get('/test/{id}', 'HomeController@test');

    Route::get('quizz', 'QuizzController@index');
    // Route::get('quizz/{id}', 'QuizzController@create');
    Route::get('quizz/{id}/edit', 'QuizzController@create');
    Route::put('quizz/{id}/edit', 'QuizzController@update')->name('update');

    Route::get('create', 'QuizzController@c');
    Route::post('create', 'QuizzController@c_store')->name('c');






});


Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('adminLoginSubmit');
	Route::get('/', 'Admin\AdminController@index')->name('admin.index');

	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


	Route::get('gallery', 'Admin\GalleryCategorieController@index');
    Route::get('gallery/{id}', 'Admin\GalleryCategorieController@show');
    Route::post('gallery', 'Admin\GalleryCategorieController@store')->name('store');
    Route::put('gallery/{id}', 'Admin\GalleryCategorieController@update')->name('update');
    Route::delete('gallery/{id}', 'Admin\GalleryCategorieController@destroy')->name('destroy');

    Route::resource('images', 'Admin\ImagesController');

    Route::get('carcategorie', 'Admin\AdminController@carcategorie');
    Route::get('carcategorie/create', 'Admin\AdminController@storeImage');
    Route::post('carcategorie/create', 'Admin\AdminController@storeCarcategorieImage');
    Route::delete('carcategorie/{id}', 'Admin\AdminController@destroyCarcategorieImage')->name('destroyCatImg');
    
    Route::resource('blog', 'Admin\BlogController');


    Route::get('categorie', 'Admin\CategorieController@index');
    Route::post('categorie', 'Admin\CategorieController@store')->name('Catstore');
    Route::put('categorie/{id}', 'Admin\CategorieController@update')->name('Catupdate');
    Route::delete('categorie/{id}', 'Admin\CategorieController@destroy')->name('Catdestroy');
});