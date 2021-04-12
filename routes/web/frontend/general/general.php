<?php

Route::group(['namespace' => 'General','middleware' => 'auth'], function () {
    Route::get('add/to/cart/{id}', 'HomeController@addtocart');
    Route::get('{cart}', 'HomeController@slug');
});
    Route::group(['namespace' => 'General'], function () {
    Route::get('change-password/{code}','HomeController@resetPasswordWithCode')->name('change-password');
    Route::post('change-password','HomeController@resetPasswordStore')->name('change-password.store');
    Route::post('help','HomeController@Help')->name('help');
    Route::get('donation/{id}','HomeController@donation')->name('donation');
    Route::post('donation/{id}','HomeController@User')->name('user');
    Route::get('/productDetails/{id}','HomeController@productDetails');
    Route::get('/catalog/{slug}','HomeController@catalog');
    Route::post('order','HomeController@Order');
    Route::get('/single-blog/{slug}','HomeController@singleBlog');
    Route::match(['get', 'post'], '/{slug}', 'HomeController@slug')->where('slug', '.*');
});


