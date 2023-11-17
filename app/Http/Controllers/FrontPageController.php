<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view("front_home");
    }


    public function about(){
        $data['title']="About Us";
        return view('front_about',$data);
    }

    public function services(){
        $data['title']="Services";
        return view('front_services',$data);
    }

    public function packages(){
        $data['title']="Packages";
        return view('front_packages',$data);
    }

    public function destination(){
        $data['title']="Destination";
        return view('front_destination',$data);
    }

    public function booking(){
        $data['title']="Booking";
        return view('front_booking',$data);
    }

    public function  guides(){
        $data['title']=" Guides";
        return view('front_guides',$data);
    }

    public function  testimonail(){
        $data['title']="Testimonail";
        return view('front_testimonail',$data);
    }

    public function  contact(){
        $data['title']="Contact";
        return view('front_contact',$data);
    }

    public function  page (){
        $data['title']="404 Page";
        return view('front_page',$data);
    }



}
