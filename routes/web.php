<?php

use Illuminate\Support\Facades\Route;

// .
// =>
// ::

// use , namespace

// Route::get('url', 'Actions');
// Route::post('url', 'Actions');
// Route::put('url', 'Actions');
// Route::patch('url', 'Actions');
// Route::delete('url', 'Actions');


// https://www/mohamednaji.com/about

Route::get('/', function() {
    return 'Homepage - Get';
});

Route::post('/', function() {
    return 'Homepage - Post';
});

Route::put('/', function() {
    return 'Homepage - Put';
});

Route::get('about', function() {
    return 'About Page';
});

Route::get('team', function() {
    return 'Team Page';
});

Route::get('contact', function() {
    return 'Contact Page';
});

Route::get('services', function() {
    return 'Services Page';
});

Route::get('user/{name}', function($name) {
    return 'User ' . $name;
});

// Route::get('news', function() {
//     return 'News';
// });

Route::get('news/{id?}', function($id = '') {
    return 'News ' . $id;
});

Route::prefix('admin')->group(function() {
    Route::get('home', function() { return 'Admin Home'; });
    Route::get('posts', function() { return 'Admin Posts'; });
    Route::get('comments', function() { return 'Admin Comments'; });
    Route::get('products', function() { return 'Admin Products'; });
});

