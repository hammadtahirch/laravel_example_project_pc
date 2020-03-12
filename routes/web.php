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

Route::get("/",function (){
    return view("welcome");
});
Route::get("/home","FrontendController@aboutUs");
Route::get("/about-us","FrontendController@aboutUs");
Route::get("/news-events","FrontendController@newsEvents");
Route::get("/media-gallery","FrontendController@mediaGallery");
Route::get("/board-members","FrontendController@boardMembers");
Route::get("/contact-us","FrontendController@contactUs");
Route::get("/job-opportunities","FrontendController@jobOpportunities");
Route::get("/join-us","FrontendController@joinUs");
Route::get("/admin","FrontendController@admin");