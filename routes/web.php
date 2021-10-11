<?php

use App\Http\Controllers\HomeController;


Auth::routes();


Route::group(['namespace' => 'Admin\Front_Auth'], function () {
    Route::get('/login', 'LoginController@login')->name('login1');
    Route::post('/login-post', 'LoginController@postLogin')->name('post.login');


});


Route::group(['namespace' => 'Front'], function () {

    Route::get('/', 'HomeController@front_index')->name('index'); //Home page
    Route::get('/all-categories', 'HomeController@all_categories')->name('all_categories');
    Route::get('/about-us', 'PagesController@about')->name('about');
    Route::get('/location', 'PagesController@location')->name('location');
    Route::get('/users', 'PagesController@user')->name('user');
    Route::get('/blog', 'BlogController@blog')->name('blog');
    Route::get('/blog-view/{id?}', 'BlogController@my_blog')->name('my_blog');
    Route::get('/contact', 'PagesController@contact')->name('contact');
    Route::get('/advance-search', 'HomeController@advance_search')->name('advance-search');
    Route::get('/signup', 'PagesController@signup')->name('signup');
    Route::get('/news', 'PagesController@news')->name('news');
    Route::get('/article', 'PagesController@article')->name('article');
    Route::get('/cars', 'CarsController@cars')->name('cars');
    Route::get('/cars-by-categtory/{slug}', 'CarsController@category_wise_cars')->name('category_wise_cars');
    Route::get('/specefic-category-wise-car/{id}', 'CarsController@specefic_category_car')->name('specefic_category_car');
    Route::get('/view/{id}', 'CarsController@cars_view')->name('cars.view');
    Route::get('/location-cars/{id}', 'CarsController@cars_location')->name('cars_by_location');
    Route::get('/search', 'HomeController@search')->name('search');
    Route::get('/product/search', 'HomeController@search1')->name('search1');
    Route::get('/advanced-search', 'HomeController@advance_search')->name('advanced.search');
    Route::get('/services', 'PagesController@services')->name('services');
    Route::get('/services/loans', 'PagesController@loans')->name('loans');
    Route::get('/services/loans/scb', 'PagesController@scb')->name('loans_scb');

    Route::get('/demo-page', 'PagesController@demo')->name('demo');


    // Services
    Route::get('/services/service-center', 'ServiceController@service_center')->name('service_center');
    Route::get('/services/spare-parts', 'ServiceController@spare_parts')->name('spare_parts');
    Route::get('/service-by-spare-parts/{slug}', 'ServiceController@shop_by_parts')->name('parts_by_shop');
    Route::get('/spare-parts-shop/{id}', 'ServiceController@shop_view')->name('view.parts.shop');
    Route::get('/parts-detail/{id}',   'ServiceController@parts_view')->name('front.parts.view');


    // Ajax Route For ChatBot

    Route::get('/bot_msg', 'ChatbotController@message');





    // Pages
    Route::group(['prefix' => 'pages'], function () {

    });

});
Route::group(['middleware' => 'auth'], function () {

    //Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('home');
    Route::get('/users', 'DashboardController@user_index')->name('users.list');
    Route::get('/users/create', 'DashboardController@create')->name('users.create');
    Route::post('/users/store', 'DashboardController@store')->name('users.store');
    Route::post('/users/update/{id}', 'DashboardController@update_users')->name('users.update');
    Route::get('/users/edit/{id}', 'DashboardController@user_edit')->name('users.edit');
    Route::get('/users/delete/{id}', 'DashboardController@user_delete')->name('users.delete');
    Route::get('/dashboard/profile/{id}', 'DashboardController@profile')->name('user.profile');
    Route::post('/update', 'DashboardController@update')->name('user.update');
    Route::post('/update/password', 'DashboardController@pass_update')->name('pass.update');

    // User

    Route::get('/user_img_delete/{id?}', 'DashboardController@getDeleteImage')->name('user-img-delete');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {


    // Chat Bot

    Route::group(['prefix' => 'chat_bot'], function () {

        Route::get('/panel', 'ChatController@panel')->name('chat.bot');
        Route::get('/create', 'ChatController@create')->name('chat.create');
        Route::post('/store', 'ChatController@store')->name('chat.store');
        Route::post('/update/{id}', 'ChatController@update')->name('chat.update');
        Route::get('/edit/{id}', 'ChatController@edit')->name('chat.edit');
        Route::get('/delete/{id}', 'ChatController@delete')->name('chat.delete');


    });




    // Products List
    Route::group(['prefix' => 'car'], function () {
        Route::get('/list', 'ProductController@index')->name('product.list');
        Route::get('/create', 'ProductController@add')->name('product.add');
        Route::post('/store', 'ProductController@store')->name('product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/update', 'ProductController@update')->name('product.update');
        Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete');
        Route::get('/view/{id}', 'ProductController@view')->name('product.view');

    });

    // Category
    Route::group(['prefix' => 'Category'], function () {
        Route::get('/list', 'CategoryController@list')->name('admin.category.list');
        Route::get('/add', 'CategoryController@add')->name('admin.category.add');
        Route::post('/store', 'CategoryController@store')->name('admin.category.store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('admin.category.update');
        Route::post('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
    });


    // Blog
    Route::group(['prefix' => 'Blog'], function () {
        Route::get('/list', 'BlogController@list')->name('admin.blog.list');
        Route::get('/add', 'BlogController@add')->name('admin.blog.add');
        Route::post('/store', 'BlogController@store')->name('admin.blog.store');
        Route::get('/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
        Route::post('/update/{id}', 'BlogController@update')->name('admin.blog.update');
        Route::get('/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
    });

     // Brand
     Route::group(['prefix' => 'Brand'], function () {
        Route::get('/list', 'BrandController@list')->name('admin.brand.list');
        Route::get('/add', 'BrandController@add')->name('admin.brand.add');
        Route::post('/store', 'BrandController@store')->name('admin.brand.store');
        Route::get('/edit/{id}', 'BrandController@edit')->name('admin.brand.edit');
        Route::post('/update/{id}', 'BrandController@update')->name('admin.brand.update');
        Route::post('/delete/{id}', 'BrandController@delete')->name('admin.brand.delete');


    });

    // Carmodel
    Route::group(['prefix' => 'Carmodel'], function () {
        Route::get('/list', 'CarmodelController@list')->name('admin.carmodel.list');
        Route::get('/add', 'CarmodelController@add')->name('admin.carmodel.add');
        Route::post('/store', 'CarmodelController@store')->name('admin.carmodel.store');
        Route::get('/edit/{id}', 'CarmodelController@edit')->name('admin.carmodel.edit');
        Route::post('/update/{id}', 'CarmodelController@update')->name('admin.carmodel.update');
        Route::post('/delete/{id}', 'CarmodelController@delete')->name('admin.carmodel.delete');
    });

    //Product Image
    Route::get('/product_image/list', 'ProductImageController@index')->name('product_image.list');
    Route::get('/product_image/add', 'ProductImageController@add')->name('product_image.add');
    Route::get('/product_image/edit/{id}', 'ProductImageController@edit')->name('product_image.edit');
    Route::get('/product_image/delete/{id}', 'ProductImageController@delete')->name('product_image.delete');
    Route::post('/product_image/store', 'ProductImageController@store')->name('product_image.store');
    Route::post('/product_image/update', 'ProductImageController@update')->name('product_image.update');

    // Country
    Route::group(['prefix' => 'country'], function () {
        Route::get('/index', 'CountryController@list')->name('admin.country.list');
        Route::get('/add', 'CountryController@add')->name('admin.country.add');
        Route::post('/store', 'CountryController@store')->name('admin.country.store');
        Route::get('/edit/{id}', 'CountryController@edit')->name('admin.country.edit');
        Route::post('/update/{id}', 'CountryController@update')->name('admin.country.update');
        Route::post('/delete/{id}', 'CountryController@delete')->name('admin.country.delete');
    });


    // City
    Route::group(['prefix' => 'city'], function () {
        Route::get('/view', 'CityController@index')->name('admin.city.index');
        Route::get('/create', 'CityController@create')->name('admin.city.create');
        Route::post('/store', 'CityController@store')->name('admin.city.store');
        Route::get('/edit/{id}', 'CityController@edit')->name('admin.city.edit');
        Route::post('/update/{id}', 'CityController@update')->name('admin.city.update');
        Route::post('/delete/{id}', 'CityController@delete')->name('admin.city.delete');
    });
    //ajax route for product module
    Route::get('/prod_img_delete/{id?}', 'ProductController@getDeleteImage');


    //ajax route for Category module

    Route::get('/category_img_delete/{id?}', 'CategoryController@getDeleteImage');

    //ajax route for for Blog module

    Route::get('/blog_img_delete/{id?}', 'BlogController@getDeleteImage');



});

Route::group(['namespace' => 'Admin','prefix' => 'spare-parts'], function () {

    // Spare Parts

    Route::get('/',               'SparePartsController@index')->name('parts.index');
    Route::get('/create',        'SparePartsController@create')->name('parts.create');
    Route::post('/store',        'SparePartsController@store')->name('parts.store');
    Route::get('/edit/{id}',     'SparePartsController@edit')->name('parts.edit');
    Route::post('/update/{id}',       'SparePartsController@update')->name('parts.update');
    Route::get('/delete/{id}',   'SparePartsController@delete')->name('parts.delete');
    Route::get('/view/{id}',   'SparePartsController@view')->name('parts.view');

    // Ajax
    Route::get('/spare_parts_img_delete/{id?}', 'SparePartsController@getDeleteImage')->name('spare-parts-img-delete');

});

Route::group(['namespace' => 'Admin','prefix' => 'contact-info'], function () {

    // User Contact Details

    Route::post('/store',        'ContactInfoController@store')->name('user_contact.store');
    Route::get('/',               'ContactInfoController@index')->name('user_contact.index');
    Route::get('/delete/{id}',   'ContactInfoController@delete')->name('user_contact.delete');

});

Route::group(['namespace' => 'Admin','prefix' => 'parts-category'], function () {

    // Parts Category

    Route::get('/',               'PartsCategoryController@index')->name('parts.category.index');
    Route::get('/create',        'PartsCategoryController@create')->name('parts.category.create');
    Route::post('/store',        'PartsCategoryController@store')->name('parts.category.store');
    Route::get('/edit/{id}',     'PartsCategoryController@edit')->name('parts.category.edit');
    Route::post('/update/{id}',   'PartsCategoryController@update')->name('parts.category.update');
    Route::get('/delete/{id}',   'PartsCategoryController@delete')->name('parts.category.delete');

    // Ajax Route

    Route::get('/parts_img_delete/{id?}', 'PartsCategoryController@getDeleteImage')->name('parts-img-delete');


});







Route::get('/cc', function () {
    // \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    // \Artisan::call('route:cache');
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
});
