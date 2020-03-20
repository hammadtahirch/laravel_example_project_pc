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
Route::get("/admin","UserController@login")->name("admin");
Route::post("/verify_login","UserController@login");
Route::get("/logout","UserController@logout");

Route::group(['middleware' => 'auth',"prefix"=>"/admin"],function (){

    //board member
    Route::get("/board-members","BoardMemberController@getAllBoardMembers");
    Route::get("/board-member/{view}/{id?}","BoardMemberController@loadEditView");

    Route::post("/board-member","BoardMemberController@saveBoardMember");
    Route::put("/board-member/{id}","BoardMemberController@updateBoardMember");
    Route::get("/delete-board-member/{id}","BoardMemberController@destroyBoardMember");
    //end

    //job
    Route::get("/jobs","JobPostingController@getAllJobs");
    Route::get("/job/{view}/{id?}","JobPostingController@loadEditView");
    Route::post("/job","JobPostingController@saveJob");
    Route::put("/job/{id}","JobPostingController@updateJob");
    Route::get("/delete-job/{id}","JobPostingController@destroyJob");
    //end

    //news events
    Route::get("/news-events","NewsEventController@getAllNewsEvents");
    Route::get("/news-event/{view}/{id?}","NewsEventController@loadEditView");
    Route::post("/news-event","NewsEventController@saveNewsEvent");
    Route::put("/news-event/{id}","NewsEventController@updateNewsEvent");
    Route::get("/delete-news-event/{id}","NewsEventController@destroyNewsEvent");
    //end

});