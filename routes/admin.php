<?php

Route::get('/', [
    'uses' => 'Cpanel\HomeController@index',
    'as' => 'cpanel.index'
]);
