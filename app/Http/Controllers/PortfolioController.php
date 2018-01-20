<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
    	return view('front-end.home.home');
    }

    public function contact() {
    	return view('front-end.contact.contact');
    }

    public function about() {
    	return view('front-end.about.about');
    }

    public function gallery() {
    	return view('front-end.gallery.gallery');
    }
}
