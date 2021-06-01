<?php

Route::get('/clear-config', function(){
    Artisan::call('cache:clear');
    return "Cache Cleared Successfully";
});
Route::get('/config-cache', function(){
    $exitcode=Artisan::call('config:cache');
    return "Cache Cleared Successfully";
});
Route::get('/storage-link', function(){
    $exitcode=Artisan::call('storage:link');
    return "Storage Linked Successfully";
});
Route::group(['namespace' => 'Web'], function () {

    /*
    *----------------------------------------------------------------------------------------------------------------------
    * Route List for basic pages
    *----------------------------------------------------------------------------------------------------------------------
    */
    require 'frontend/general/general.php';




});

