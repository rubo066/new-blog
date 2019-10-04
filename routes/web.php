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

// Route::get('/', function () {
//     return view('first', ['name'=> "Rubo",'age'=>"28"]);
// });
// Route::get('/', 'HomeController@index');
// Route::get('/test/{name}', 'HomeController@index');
// Route::get('/show_users', 'HomeController@user');
// Route::get('/users/set/{name}/{email}/{password}', 'UserController@creatUsers');
// Route::get('/users/get/', 'UserController@getusers');
// Route::get('/users/registration/', 'UserController@getRegistration');
// Route::post('/users/registration/', 'UserController@postRegistration');
// Route::post('/phone/list/', 'PhoneController@createPhone');
// Route::get('/phone/add/', 'PhoneController@addphone');
// Route::get('/users/get', 'UserController@getuser');

// Route::get('/', 'frontController@homepage');
// Route::get('/about', 'frontController@aboutpage');


// Route::get('/', function() {
//     return View::make('home.index1');
// });
// Route::get('/home', function() {
//     return View::make('home.homeContent');
// });

// Route::get('/about', function() {
//     return View::make('home.aboutContent');
// });

// Route::get('/services', function() {
//     return View::make('home.servicesContent');
// });

// Route::get('/blog', function() {
//     return View::make('home.blogContent');
// });

// Route::get('/blog-details', function() {
//     return View::make('home.blog-detailsContent');
// });

// Route::get('/contact', function() {
//     return View::make('home.contactContent');
// });

// Route::get('/Detectives', function() {
//     return View::make('home.DetectivesContent');
// });

// Route::get('/Fantasy', function() {
//     return View::make('home.FantasyContent');
// });
 
//   Route::get('/makes', 'MakesController@homepage');

    //Route::post('o/phone/list/', 'PhoneController@createPhone');
    // Route::get('/makes', 'MakesController@index');
    // Route::get('/makes/add', 'MakesController@addMake');
    // Route::post('/makes/add/', 'MakesController@addMakesPost');



// Route::get('/test',function(){
//     echo "Hello Laravel";
// });









// Route::get('/add', 'cuisineController@addFood');


// Route::get('/menu', function() {
//     return View::make('home.MenuThevenue');
// });
// Route::get('/home', 'HomeController@index')->name('home');




    // Route::group([ 'prefix' => 'guest'], function () {
    //     Route::get('/', function() {
    //         return View::make('home.HomeThevenue');
    //     });

    //     Route::get('/about', function() {
    //         return View::make('home.AboutThevenue');
    //     });
    //     Route::get('/menu', 'CuisineController@index');
    //     Route::get('/menu/add', 'CuisineController@addFood');
    //     Route::post('/menu/add', 'CuisineController@searchFood');
    // });

    Auth::routes();
        Route::post('/login', 'Auth\LoginController@login');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        Route::get('/', function() {
                return View::make('home.HomeThevenue');
            });
        Route::get('/about', function() {
                return View::make('home.AboutThevenue');
                
            });
        Route::get('/menu', 'CuisineController@index');
        Route::get('/menu/add', 'CuisineController@addFood');
                    Route::post('/menu/add', 'CuisineController@searchFood');
        Route::group([ 'middleware' => 'guest'], function () {
            Route::group([ 'prefix' => 'guest'], function () {
                Route::get('/', function() {
                    return View::make('home.HomeThevenue');
                });
                Route::get('/about', function() {
                    return View::make('home.AboutThevenue');
                    
                });
                });
        });


Route::group([ 'middleware' => 'full_admin'], function () {
    Route::group([ 'prefix' => 'admin'], function () {
    Route::get('/' , 'AdminController@index');
    Route::get('/menu' , 'AdminController@menu');

    });
});

