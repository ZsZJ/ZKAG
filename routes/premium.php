<?php

Route::get('/', [
    'uses' => 'Premium\DashboardController@index',
    'as' => 'premium.index'
]);

/** Agenda Controller invoke */
Route::get('/agenda', [
    'uses' => 'Premium\AgendaController',
    'as' => 'agenda'
]);

Route::resource('/events', 'Premium\EventController', ['only' => [
    'store', 'edit', 'update', 'destroy'
]]);
