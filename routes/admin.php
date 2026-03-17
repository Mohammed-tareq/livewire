<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::view('/', 'admin.pages.index')->name('admin.index');

});
