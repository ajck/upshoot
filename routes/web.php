<?php

Route::get('/', 'MainController@showIndexPage'); // Show index page

Route::post('addowner', 'MainController@addOwner'); // Route for adding an owner, via AJAX
Route::post('addmotorbike', 'MainController@addMotorbike'); // Route for adding a motorbike, via AJAX
Route::get('closestowner', 'MainController@closestOwner'); // Route for GETting the closest owner, via AJAX
