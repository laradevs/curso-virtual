<?php

use Illuminate\Support\Facades\Route;

Route::get('/','GuestController@index');
Route::get('posts-by-category/{category}','GuestController@postByCategory')->name('view_posts_category');
Route::get('view-post/{post}','GuestController@viewPost')->name('view_post');