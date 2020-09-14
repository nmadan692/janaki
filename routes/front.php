<?php

// Homepage
Route::get('/', 'HomeController@index')->name('home');

// About
Route::get('/about', 'AboutController@index')->name('about');

// Blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/details', 'BlogController@show')->name('blog.details');


// contact
Route::get('/contact', 'ContactController@index')->name('contact');

// event
Route::get('/event', 'EventController@index')->name('event');
Route::get('/event/details', 'EventController@show')->name('event.details');


// Courses
Route::get('/courses', 'CoursesController@index')->name('courses');
Route::get('/courses/details', 'coursesController@show')->name('courses.details');

