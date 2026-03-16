<?php

use Illuminate\Support\Facades\Route;




Route::prefix('/')->group(function () {
    Route::view('/', 'front.pages.index')->name('home');
    Route::view('/about', 'front.pages.about')->name('about');
    Route::view('/service', 'front.pages.service')->name('service');
    Route::view('/project', 'front.pages.projects')->name('project');
    Route::view('/team', 'front.pages.team')->name('team');
    Route::view('/testimonial', 'front.pages.testimonial')->name('testimonial');
    Route::view('/contact', 'front.pages.contact')->name('contact');
});
