<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/', [TestController::class, 'about'])->name('homepage');

// Route::get('/', 'TestController@about')->name('homepage');

// explode('@', 'TestController@about');

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


Route::get('/home', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/team', [SiteController::class, 'team'])->name('site.team');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/services', [SiteController::class, 'services'])->name('site.services');

Route::get('/post/{id?}', [SiteController::class, 'post'])->name('site.post');


// Controller Types
// 1. Normal
// 2. Invoke
// 3. Resource

// products
// create, read, update, delete

// Route::fallback(function() {
//     return redirect('/');
// });

// Route::get('/{err}', function() {
//     return 'Error';
// });

// Route::get('/{err}/{d}', function() {
//     return 'Error';
// });

// Route::get('/{err}/{dd}/{rr}', function() {
//     return 'Error';
// });

// Route::get('/{err}/{dd}/{ee}/{er}', function() {
//     return 'Error';
// });

Route::match(['put', 'patch'], '/edit', function() {

});


Route::get('site1', [Site1Controller::class, 'index'])->name('site1.index');


Route::get('freelancer', [FreelancerController::class, 'index'])->name('freelancer.index');

Route::get('creative', [CreateController::class, 'index'])->name('creative.index');


// alias pmc='php artisan make:controller'
