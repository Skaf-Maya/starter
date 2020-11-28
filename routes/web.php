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

Route::get('/', function () {
    return view('welcome');
});

//////////////////////////////////////////////////////////////////

//route parameters
//route name

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/test2/{id}', function ($id) {
    return $id;
})-> name('a');

Route::get('/test3/{id?}', function () {
    return 'welcome';
})-> name('b');

//////////////////////////////////////////////////////////////////

//namespace

Route::namespace('Front')-> group(function () {

    //all route only only access controller or methods in folder called Front
    Route::get('users','UserController@showUserName');
});

//prefix

Route::prefix('users')-> group(function () {

    Route::get('show',function () {
        return 'Mayaaaaa';
    });
    //set of routes
//    Route::get('show','UserController@showUserName');
//    Route::get('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::get('update','UserController@showUserName');
});

//group & middleware

Route::group(['prefix' => 'users','middleware' => 'auth'],function () {

    Route::get('/',function () {
        return 'work';
    });
    //set of routes
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
});

//middleware

Route::get('check',function () {
    return 'middleware';
})-> middleware('auth');

//////////////////////////////////////////////////////////////////

//Controller with middleware

//1
Route::get('second','Admin\SecondController@showString');
//2
Route::group(['namespace' => 'Admin'],function () {
    Route::get('second','SecondController@showString')->middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@showString3');
});


Route::get('login', function () {
    return 'LOGIN ';
})->name('login');

//////////////////////////////////////////////////////////////////

//resource

Route::resource('news','NewsController');

//Route::post('news','NewsController@store');
//Route::get('news','NewsController@index');
//Route::get('news/create','NewsController@create');
//Route::delete('news/{id}','NewsController@destroy');
//Route::put('news/{id}','NewsController@update');
//Route::get('news/{id}','NewsController@show');
//Route::get('news/{id}/edit','NewsController@edit');

//////////////////////////////////////////////////////////////////

//view

Route::get('index','Front\UserController@getIndex');

//////////////////////////////////////////////////////////////////

//landing

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

//////////////////////////////////////////////////////////////////


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');


//////////////////////////////////////////////////////////////////

Route::get('/redirect/{service}','SocialController@redirect');

//Route::get('/callback/{service}','SocialController@callback');


//////////////////////////////////////////////////////////////////


Route::get('fillable','CrudController@getOffers');


//Route::group(['prefix' => 'offers'],function () {
//    Route::get('store','CrudController@store');
//});


Route::group(['prefix' => LaravelLocalization::setLocale() ,'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function () {

    Route::group(['prefix' => 'offers'],function () {
        Route::get('create','CrudController@create');
        Route::post('store','CrudController@store')-> name('offers.store');
    });

});

