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

//


Route::group(['middleware'=>'web'],function (){
    Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PageConteroller@execute','as'=>'page']);

    Route::auth();
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

    //  admin
    Route::get('/',function (){
        //вывод хелпера вью для отображения макета
    });

    //  admin/pages
    Route::group(['prefix'=>'pages'],function (){
        //  admin/pages
        Route::get('/',['uses'=>'PagesController@execute','as'=>'pages']);
        //  admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
        //admin/pages/edit/2
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);
    });

    //  admin/portfolio
    Route::group(['prefix'=>'portfolio'],function (){
        //  admin/portfolio
        Route::get('/',['uses'=>'PortfolioController@execute','as'=>'portfolio']);
        //  admin/portfolio/add
        Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
        //admin/portfolio/edit/2
        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);
    });


    //  admin/categories
    Route::group(['prefix'=>'categories'],function (){
        //  admin/categories
        Route::get('/',['uses'=>'CategoryController@execute','as'=>'categories']);
        //  admin/categories/add
        Route::match(['get','post'],'/add',['uses'=>'CategoryAddController@execute','as'=>'categoryAdd']);
        //admin/categories/edit/2
        Route::match(['get','post','delete'],'/edit/{category}',['uses'=>'CategoryEditController@execute','as'=>'categoryEdit']);
    });

    //  admin/prices
    Route::group(['prefix'=>'prices'],function (){
        //  admin/prices
        Route::get('/',['uses'=>'PriceController@execute','as'=>'prices']);
        //  admin/prices/add
        Route::match(['get','post'],'/add',['uses'=>'PriceAddController@execute','as'=>'priceAdd']);
        //admin/prices/edit/2
        Route::match(['get','post','delete'],'/edit/{category}',['uses'=>'PriceEditController@execute','as'=>'priceEdit']);
    });

    //  admin/conditions
    Route::group(['prefix'=>'conditions'],function (){
        //  admin/conditions
        Route::get('/',['uses'=>'ConditionsController@execute','as'=>'conditions']);
        //  admin/conditions/add
        Route::match(['get','post'],'/add',['uses'=>'ConditionsAddController@execute','as'=>'conditionAdd']);
        //admin/conditions/edit/2
        Route::match(['get','post','delete'],'/edit/{category}',['uses'=>'ConditionsEditController@execute','as'=>'conditionEdit']);
    });
});