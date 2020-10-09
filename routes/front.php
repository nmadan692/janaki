<?php

// Homepage
Route::get('/', 'HomeController@index')->name('home');

// About
Route::get('/about', 'AboutController@index')->name('about');

// Blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.details');


// contact
Route::resource('/contact', 'ContactController');

// event
Route::get('/event', 'EventController@index')->name('event');
Route::get('/event/details', 'EventController@show')->name('event.details');


// Courses
Route::get('/courses', 'CoursesController@index')->name('courses');
Route::get('/courses/{id}', 'CoursesController@show')->name('courses.details');

// Abroad
Route::get('/abroad', 'AbroadController@index')->name('abroad');
Route::get('/abroad/{id}', 'AbroadController@show')->name('abroad.details');

//Downloads
Route::get('/download', 'DownloadController@index')->name('download');
