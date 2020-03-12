<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{

    public function aboutUs(){
        return view("pages.home");
    }

    public function newsEvents(){
        return view("pages.news-events");
    }

    public function mediaGallery(){
        return view("pages.media-gallery");
    }

    public function boardMembers(){
        return view("pages.board-members");
    }

    public function contactUs(){
        return view("pages.contact-us");
    }

    public function jobOpportunities(){
        return view("pages.job-opportunities");
    }

    public function admin(){
        return view("pages.admin");
    }

    public function joinUs(){
        return view("pages.join-us");
    }
}