<?php
//Route::group(['namespace' => 'General','middleware' => 'auth'], function () {
//    Route::get('add/to/cart/{id}', 'HomeController@addtocart');
//
//});

    Route::group(['namespace' => 'General'], function () {
    Route::get('change-password/{code}','HomeController@resetPasswordWithCode')->name('change-password');
    Route::post('change-password','HomeController@resetPasswordStore')->name('change-password.store');
    Route::post('help','HomeController@Help')->name('help');
    Route::get('donation/{id}','HomeController@donation')->name('donation');
    Route::post('donation/{id}','HomeController@User')->name('user');
    Route::get('/productDetails/{id}','HomeController@productDetails');
    Route::get('/catalog/university/{slug}','HomeController@UniversityCatalog');
    Route::get('/catalog/publication/{slug}','HomeController@publicationCatalog');
    Route::get('/catalog/semester/{slug}','HomeController@semesterCatalog');
    Route::get('/catalog/faculty/{slug}','HomeController@facultyCatalog');
    Route::get('/catalog/category/{slug}','HomeController@categoryCatalog');
    Route::get('/catalog/{slug}','HomeController@catalog');
    Route::get('/cart','HomeController@cart')->middleware('auth');
    Route::get('add/to/cart/{id}', 'HomeController@addtocart')->middleware('auth');
    Route::get('search','HomeController@search')->name('search');
    Route::get('/cart/delete/{id}','HomeController@Destroy')->name('destroy');
    Route::post('order','HomeController@Order');
    Route::post('contact','HomeController@Contact');
    Route::get('/single-blog/{slug}','HomeController@singleBlog');
    Route::match(['get', 'post'], '/{slug}', 'HomeController@slug')->where('slug', '.*');
});




