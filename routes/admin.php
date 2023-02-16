<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('home', function() { return 'Admin Home'; })->name('adminhome');
    Route::get('posts', function() { return 'Admin Posts'; });
    Route::get('comments', function() { return 'Admin Comments'; });
    Route::get('products', function() { return 'Admin Products'; });
});
