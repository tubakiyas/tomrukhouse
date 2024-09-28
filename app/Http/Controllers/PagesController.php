<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('frontend.pages.aboutUs');
    }

    public function floorPlans() {
        return view('frontend.pages.floorPlans');
    }

    public function floorDetail() {
        return view('frontend.pages.floorDetail');
    }

    public function photos() {
        return view('frontend.pages.photos');
    }

    public function allPhotos() {
        return view('frontend.pages.allPhotos');
    }

    public function videos() {
        return view('frontend.pages.videos');
    }

    public function allVideos() {
        return view('frontend.pages.allVideos');
    }

    public function process() {
        return view('frontend.pages.process');
    }

    public function events() {
        return view('frontend.pages.events');
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function form() {
        return view('frontend.staticPages.form');
    }

    public function privacy() {
        return view('frontend.staticPages.privacy');
    }

    public function kvkk() {
        return view('frontend.staticPages.kvkk');
    }

}
