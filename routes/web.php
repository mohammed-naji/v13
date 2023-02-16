<?php

use Illuminate\Support\Facades\Route;

// .
// =>
// ::
// ->

// use , namespace

// Route::get('url', 'Actions');
// Route::post('url', 'Actions');
// Route::put('url', 'Actions');
// Route::patch('url', 'Actions');
// Route::delete('url', 'Actions');


// https://www/mohamednaji.com/about

Route::get('/', function() {
    // return url('about');


    $name = 'mohammed';
    $age = 29;
    $user = 'mohnaji94';

    // return url('user/'.$name.'/'.$age.'/'.$user);
    return route('userprofile', [$name, $age, $user]);

    // return route('aboutpage');
})->name('homepage');

Route::post('/', function() {
    return 'Homepage - Post';
});

Route::put('/', function() {
    return 'Homepage - Put';
});

Route::get('about-me', function() {
    return 'About Page';
})->name('aboutpage');

Route::get('team', function() {
    return 'Team Page';
});

Route::get('contact', function() {
    return 'Contact Page';
});

Route::get('services', function() {
    return 'Services Page';
});

// /user/ali/20
Route::get('user/{name}/age/{age}/user/{username}', function($name, $age, $username) {
    // preg_match(); regular expression => regex

    return 'User ' . $name . ' your age is ' . $age . ' your username ' . $username;
})->whereAlpha('name')->whereNumber('age')->whereAlphaNumeric('username')->name('userprofile');

// Route::get('news', function() {
//     return 'News';
// });

Route::get('news/{id?}', function($id = '') {
    return 'News ' . $id;
});

// include 'admin.php';



// function test()
// {
//     echo 'Test';
// }

// test();

// class Test {
//     public static function aa()
//     {
//         echo 'aa';
//     }
// }

// Test::aa();

// $t = new Test();

// $t->aa();

Route::get('/', [HomeController::class, 'index'])->name('homepage');
