<?php


Route::group(['namespace' => 'WebSite'], function () {

    Route::resource('posts', 'PostController', [
        'names' => [
            'index' => 'dashboard.posts.index',
            'create' => 'dashboard.posts.create',
            'store' => 'dashboard.posts.store',
            'edit' => 'dashboard.posts.edit',
            'update' => 'dashboard.posts.update',
            'destroy' => 'dashboard.posts.destroy',
        ]
    ]);
    Route::resource('banners', 'BannerController', [
        'names' => [
            'index' => 'dashboard.banners.index',
            'create' => 'dashboard.banners.create',
            'store' => 'dashboard.banners.store',
            'edit' => 'dashboard.banners.edit',
            'update' => 'dashboard.banners.update',
            'destroy' => 'dashboard.banners.destroy',
        ]
    ]);

    Route::resource('services', 'ServicesController', [
        'names' => [
            'index' => 'dashboard.services.index',
            'create' => 'dashboard.services.create',
            'store' => 'dashboard.services.store',
            'edit' => 'dashboard.services.edit',
            'update' => 'dashboard.services.update',
            'destroy' => 'dashboard.services.destroy',
        ]
    ]);
    Route::resource('news', 'NewsController', [
        'names' => [
            'index' => 'dashboard.news.index',
            'create' => 'dashboard.news.create',
            'store' => 'dashboard.news.store',
            'edit' => 'dashboard.news.edit',
            'update' => 'dashboard.news.update',
            'destroy' => 'dashboard.news.destroy',
        ]
    ]);

    Route::resource('testimonials', 'TestimonialController', [
        'names' => [
            'index' => 'dashboard.testimonials.index',
            'create' => 'dashboard.testimonials.create',
            'store' => 'dashboard.testimonials.store',
            'edit' => 'dashboard.testimonials.edit',
            'update' => 'dashboard.testimonials.update',
            'destroy' => 'dashboard.testimonials.destroy',
        ]
    ]);

    Route::resource('events', 'EventController', [
        'names' => [
            'index' => 'dashboard.events.index',
            'create' => 'dashboard.events.create',
            'store' => 'dashboard.events.store',
            'edit' => 'dashboard.events.edit',
            'update' => 'dashboard.events.update',
            'destroy' => 'dashboard.events.destroy',
        ]
    ]);
    Route::resource('cart', 'CartController', [
        'names' => [
            'index' => 'dashboard.cart.index',
            'destroy' => 'dashboard.cart.destroy',
        ]
    ]);
    Route::resource('pages', 'PagesController', [
        'names' => [
            'index' => 'dashboard.pages.index',
            'create' => 'dashboard.pages.create',
            'store' => 'dashboard.pages.store',
            'edit' => 'dashboard.pages.edit',
            'update' => 'dashboard.pages.update',
            'destroy' => 'dashboard.pages.destroy',
        ]
    ]);
    Route::resource('pages', 'PagesController', [
        'names' => [
            'index' => 'dashboard.pages.index',
            'create' => 'dashboard.pages.create',
            'store' => 'dashboard.pages.store',
            'edit' => 'dashboard.pages.edit',
            'update' => 'dashboard.pages.update',
            'destroy' => 'dashboard.pages.destroy',
        ]
    ]);
    Route::resource('help', 'HelpController', [
        'names' => [
            'index' => 'dashboard.help.index',
            'create' => 'dashboard.help.create',
            'store' => 'dashboard.help.store',
            'edit' => 'dashboard.help.edit',
            'update' => 'dashboard.help.update',
            'destroy' => 'dashboard.help.destroy',
            'show'=>'dashboard.help.show',
        ]
    ]);
    Route::resource('donor', 'DonorController', [
        'names' => [
            'index' => 'dashboard.donor.index',
            'create' => 'dashboard.donor.create',
            'store' => 'dashboard.donor.store',
            'edit' => 'dashboard.donor.edit',
            'update' => 'dashboard.donor.update',
            'destroy' => 'dashboard.donor.destroy',
            'show'=>'dashboard.donor.show',
        ]
    ]);
    Route::resource('donation', 'DonationController', [
        'names' => [
            'index' => 'dashboard.donation.index',
            'create' => 'dashboard.donation.create',
            'store' => 'dashboard.donation.store',
            'edit' => 'dashboard.donation.edit',
            'update' => 'dashboard.donation.update',
            'destroy' => 'dashboard.donation.destroy',
            'show'=>'dashboard.donation.show',
        ]
    ]);
    Route::resource('product','ProductController',[
        'names' => [
            'index' => 'dashboard.product.index',
            'create' => 'dashboard.product.create',
            'store' => 'dashboard.product.store',
            'edit' => 'dashboard.product.edit',
            'update' => 'dashboard.product.update',
            'destroy' => 'dashboard.product.destroy',
        ]
    ]);
    Route::resource('products','ProductsController',[
        'names' => [
            'index' => 'dashboard.products.index',
            'create' => 'dashboard.products.create',
            'store' => 'dashboard.products.store',
            'edit' => 'dashboard.products.edit',
            'update' => 'dashboard.products.update',
            'destroy' => 'dashboard.products.destroy',
        ]
    ]);
    Route::resource('order','OrderController',[
        'names' => [
            'index' => 'dashboard.order.index',
            'create' => 'dashboard.order.create',
            'store' => 'dashboard.order.store',
            'edit' => 'dashboard.order.edit',
            'show' => 'dashboard.order.show',
            'update' => 'dashboard.order.update',
            'destroy' => 'dashboard.order.destroy',
        ]
    ]);
    Route::resource('semester','SemesterController',[
        'names' => [
            'index' => 'dashboard.semester.index',
            'create' => 'dashboard.semester.create',
            'store' => 'dashboard.semester.store',
            'edit' => 'dashboard.semester.edit',
            'show' => 'dashboard.semester.show',
            'update' => 'dashboard.semester.update',
            'destroy' => 'dashboard.semester.destroy',
        ]
    ]);
    Route::resource('faculty','FacultyController',[
        'names' => [
            'index' => 'dashboard.faculty.index',
            'create' => 'dashboard.faculty.create',
            'store' => 'dashboard.faculty.store',
            'edit' => 'dashboard.faculty.edit',
            'show' => 'dashboard.faculty.show',
            'update' => 'dashboard.faculty.update',
            'destroy' => 'dashboard.faculty.destroy',
        ]
    ]);
    Route::resource('invoice','InvoiceController',[
        'names' => [
            'show' => 'dashboard.invoice.show',
        ]
    ]);
    Route::match(['put', 'patch'], 'events/approve/{event}', 'EventController@approve')->name('dashboard.events.approve');

});
