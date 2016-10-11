<?php



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/','AdminController@index')->name('index');


    Route::group(['prefix'=>'cms'],function(){
        Route::get('create','CmsController@create')->name('cms-create');
    });
});

