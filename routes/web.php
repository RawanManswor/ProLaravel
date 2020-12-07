<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/landing', function () {
   
//     return view('landing');
// });
// Route::get('/test/{id?}', function () {
//     return 'hiiiii';
// });
// Route::get('/print-string', function () {
//     return 'Welcom Rawan ';
// })->name('r');
// Route::get('/about-me', function () {
//     return view('about');
// })->name("About");
// Route::view('contact-me', 'contact',['page_name'=>'The Page Contact Me',
// 'page_description'=>'the description pagre'])->name("Contact");


// Route::get('category/{id}', function ($id) {
//     $cat=["1"=>"php"
//     ,"2"=>"c++"
//     ,"3"=>"java"];
//     return view("category",["the_id" => $cat[$id] ?? "This is id not found" ] );
// });


// Route::get('Navbar', function () {
// return view("layout/navbar");
// });


// Route::get('master', function () {
//     return view("layouts/master");
//     });
//     Route::get('header', function () {
//         return view("includes/header");
//         });
        
// /*
// Route::get("users","Front\FirstController@ShowName");

//  Route::namespace('Front')->group(function(){
     
//      Route::get("Admin","FirstController@showName");
//  });

// */
//  Route::resource("new","NewsController");
    
    
//  Route::get('index','Front\FirstController@getIndex');
//  Route::get('myName','Front\FirstController@getName');

//  Route::get('arrayforeach',function(){
//       $arr=["php","JavaScript","Laravel","bootstrap"];
//       return view("welcome",compact('arr'));
//  });
 
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

 Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);
