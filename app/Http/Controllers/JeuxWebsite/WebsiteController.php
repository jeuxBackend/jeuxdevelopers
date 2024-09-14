<?php

namespace App\Http\Controllers\JeuxWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homePage(){
        $page = 'homePage';
        $subpage = 'homePageAll';
        return view('pages.home-page', compact('page', 'subpage'));
    }
    public function customSoftwarePage(){
        $page = 'services';
        $subpage = 'customSoftwarePage';
        return view('pages.custom-software-page', compact('page', 'subpage'));
    }
    public function androidLeadingPage(){
        $page = 'services';
        $subpage = 'androidLeadingPage';
        return view('pages.android-leading-page', compact('page', 'subpage'));
    }
}
