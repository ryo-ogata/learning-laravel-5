<?php

Route::get('articles', 'ArticlesController@index');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
