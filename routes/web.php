<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');

Route::get('/workshop/{category}', 'HomeController@workshop')->name('workshop');

Route::get('/downloadPDF/{pdf}', 'HomeController@downloadPDF')->name('downloadPDF');

Route::get('/admin', function(){
    return redirect()->route('login');
});

Route::namespace('Admin\Auth')
    ->prefix('admin')
    ->group(function(){

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    // Registration Routes...
    // Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    // Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    // Email Verification Routes...
    // Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');

});

Route::namespace('Admin')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function(){

        Route::get('/home', function(){
            return view('admin.pages.index');
        })->name('admin.home');

        // Home Image
        Route::get('/home-image', 'HomeImageController@index')->name('admin.home-image');
        Route::get('/home-image/create', 'HomeImageController@create')->name('admin.home-image.create');
        Route::post('/home-image/store', 'HomeImageController@store')->name('admin.home-image.store');
        Route::get('/home-image/{image}/show', 'HomeImageController@show')->name('admin.home-image.show');
        // Route::get('/home-image/{image}/edit', 'HomeImageController@edit')->name('admin.home-image.edit');
        // Route::post('/home-image/{image}/edit', 'HomeImageController@update')->name('admin.home-image.update');
        Route::post('home-image/{image}/delete', 'HomeImageController@destroy')->name('admin.home-image.delete');

        // Working Hours
        Route::get('/workinghours', 'WorkingHoursController@index')->name('admin.workinghours');
        Route::get('/workinghours/{day}/edit', 'WorkingHoursController@edit')->name('admin.workinghours.edit');
        Route::post('/workinghours/{day}/edit', 'WorkingHoursController@update')->name('admin.workinghours.update');

        // Gallery
        Route::get('/gallery', 'GalleryController@index')->name('admin.gallery');
        Route::get('/gallery/create', 'GalleryController@create')->name('admin.gallery.create');
        Route::post('/gallery/store', 'GalleryController@store')->name('admin.gallery.store');
        // Route::get('/gallery/{image}/show', 'GalleryController@show')->name('admin.gallery.show');
        Route::get('/gallery/{image}/edit', 'GalleryController@edit')->name('admin.gallery.edit');
        Route::post('/gallery/{image}/edit', 'GalleryController@update')->name('admin.gallery.update');
        Route::post('/gallery/{image}/delete', 'GalleryController@destroy')->name('admin.gallery.delete');

        // Gallery category
        Route::get('/gallery-category/create', 'GalleryCategoryController@create')->name('admin.gallery-category.create');
        Route::post('/gallery-category/store', 'GalleryCategoryController@store')->name('admin.gallery-category.store');
        // Route::get('/gallery-category/{category}/show', 'GalleryCategoryController@show')->name('admin.gallery-category.show');
        Route::get('/gallery-category/{category}/edit', 'GalleryCategoryController@edit')->name('admin.gallery-category.edit');
        Route::post('/gallery-category/{category}/edit', 'GalleryCategoryController@update')->name('admin.gallery-category.update');
        Route::post('/gallery-category/{category}/delete', 'GalleryCategoryController@destroy')->name('admin.gallery-category.delete');


        // Workshop
        Route::namespace('Workshop')->group(function() {
            
            Route::get('/workshop', function(){ return view('admin.pages.workshop.index'); })->name('admin.workshop');

            // Prehistory
            Route::get('/workshop/prehistory', 'PrehistoryController@index')->name('admin.workshop.prehistory');
            Route::get('/workshop/prehistory/create', 'PrehistoryController@create')->name('admin.workshop.prehistory.create');
            Route::post('/workshop/prehistory/store', 'PrehistoryController@store')->name('admin.workshop.prehistory.store');
            Route::get('/workshop/prehistory/{record}/edit', 'PrehistoryController@edit')->name('admin.workshop.prehistory.edit');
            Route::post('/workshop/prehistory/{record}/edit', 'PrehistoryController@update')->name('admin.workshop.prehistory.update');
            Route::post('/workshop/prehistory/{record}/delete', 'PrehistoryController@destroy')->name('admin.workshop.prehistory.delete');
            Route::post('/workshop/prehistory/pdf/store', 'PrehistoryController@uploadPDF')->name('admin.workshop.prehistory.pdf.store');
            // Route::get('/workshop/prehistory/{record}/show', 'PrehistoryController@show')->name('admin.workshop.show');

                // Prehistory items
                Route::get('/workshop/prehistory/{article}', 'PrehistoryArticleController@index')->name('admin.workshop.prehistory.article');
                Route::get('/workshop/prehistory/{article}/create', 'PrehistoryArticleController@create')->name('admin.workshop.prehistory.article.create');
                Route::post('/workshop/prehistory/{article}/store', 'PrehistoryArticleController@store')->name('admin.workshop.prehistory.article.store');
                Route::get('/workshop/prehistory/article/{record}/edit', 'PrehistoryArticleController@edit')->name('admin.workshop.prehistory.article.edit');
                Route::post('/workshop/prehistory/article/{record}/edit', 'PrehistoryArticleController@update')->name('admin.workshop.prehistory.article.update');
                Route::post('/workshop/prehistory/article/{record}/delete', 'PrehistoryArticleController@destroy')->name('admin.workshop.prehistory.article.delete');

            // Traditions
            Route::get('/workshop/traditions', 'TraditionsController@index')->name('admin.workshop.traditions');
            Route::get('/workshop/traditions/create', 'TraditionsController@create')->name('admin.workshop.traditions.create');
            Route::post('/workshop/traditions/store', 'TraditionsController@store')->name('admin.workshop.traditions.store');
            Route::get('/workshop/traditions/{record}/edit', 'TraditionsController@edit')->name('admin.workshop.traditions.edit');
            Route::post('/workshop/traditions/{record}/edit', 'TraditionsController@update')->name('admin.workshop.traditions.update');
            Route::post('/workshop/traditions/{record}/delete', 'TraditionsController@destroy')->name('admin.workshop.traditions.delete');
            Route::post('/workshop/traditions/pdf/store', 'TraditionsController@uploadPDF')->name('admin.workshop.traditions.pdf.store');
            // Route::get('/workshop/traditions/{record}/show', 'TraditionsController@show')->name('admin.workshop.show');

                // Traditions items
                Route::get('/workshop/traditions/{article}', 'TraditionsArticleController@index')->name('admin.workshop.traditions.article');
                Route::get('/workshop/traditions/{article}/create', 'TraditionsArticleController@create')->name('admin.workshop.traditions.article.create');
                Route::post('/workshop/traditions/{article}/store', 'TraditionsArticleController@store')->name('admin.workshop.traditions.article.store');
                Route::get('/workshop/traditions/article/{record}/edit', 'TraditionsArticleController@edit')->name('admin.workshop.traditions.article.edit');
                Route::post('/workshop/traditions/article/{record}/edit', 'TraditionsArticleController@update')->name('admin.workshop.traditions.article.update');
                Route::post('/workshop/traditions/article/{record}/delete', 'TraditionsArticleController@destroy')->name('admin.workshop.traditions.article.delete');

            // Baby
            Route::get('/workshop/baby', 'BabyController@index')->name('admin.workshop.baby');
            Route::get('/workshop/baby/create', 'BabyController@create')->name('admin.workshop.baby.create');
            Route::post('/workshop/baby/store', 'BabyController@store')->name('admin.workshop.baby.store');
            Route::get('/workshop/baby/{record}/edit', 'BabyController@edit')->name('admin.workshop.baby.edit');
            Route::post('/workshop/baby/{record}/edit', 'BabyController@update')->name('admin.workshop.baby.update');
            Route::post('/workshop/baby/{record}/delete', 'BabyController@destroy')->name('admin.workshop.baby.delete');
            Route::post('/workshop/baby/pdf/store', 'BabyController@uploadPDF')->name('admin.workshop.baby.pdf.store');
            // Route::get('/workshop/baby/{record}/show', 'BabyController@show')->name('admin.workshop.show');

                // Baby items
                Route::get('/workshop/baby/{article}', 'BabyArticleController@index')->name('admin.workshop.baby.article');
                Route::get('/workshop/baby/{article}/create', 'BabyArticleController@create')->name('admin.workshop.baby.article.create');
                Route::post('/workshop/baby/{article}/store', 'BabyArticleController@store')->name('admin.workshop.baby.article.store');
                Route::get('/workshop/baby/article/{record}/edit', 'BabyArticleController@edit')->name('admin.workshop.baby.article.edit');
                Route::post('/workshop/baby/article/{record}/edit', 'BabyArticleController@update')->name('admin.workshop.baby.article.update');
                Route::post('/workshop/baby/article/{record}/delete', 'BabyArticleController@destroy')->name('admin.workshop.baby.article.delete');

        });

        // Partners
        Route::get('/partner', 'PartnerController@index')->name('admin.partner');
        Route::get('/partner/create', 'PartnerController@create')->name('admin.partner.create');
        Route::post('/partner/store', 'PartnerController@store')->name('admin.partner.store');
        Route::get('/partner/{partner}/edit', 'PartnerController@edit')->name('admin.partner.edit');
        Route::post('/partner/{partner}/edit', 'PartnerController@update')->name('admin.partner.update');
        Route::post('/partner/{partner}/delete', 'PartnerController@destroy')->name('admin.partner.delete');

        // Info
        Route::get('/info', 'InfoController@index')->name('admin.info');
        Route::post('/info/{text}/edit', 'InfoController@update')->name('admin.info.update');

        // Lunch
        Route::get('/lunch', 'LunchController@index')->name('admin.lunch');
        Route::post('/lunch/{text}/edit', 'LunchController@update')->name('admin.lunch-text.update');
        Route::get('/lunch/picture/create', 'LunchController@create')->name('admin.lunch-picture.create');
        Route::post('/lunch/picture/store', 'LunchController@store')->name('admin.lunch-picture.store');
        Route::get('/lunch/picture/{image}/show', 'LunchController@show')->name('admin.lunch-picture.show');
        Route::post('/lunch/picture/{image}/delete', 'LunchController@destroy')->name('admin.lunch-picture.delete');

        // Change password
        Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('admin.changePass');
        Route::post('/change-password', 'Auth\ChangePasswordController@update')->name('admin.changePass.update');
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    });
