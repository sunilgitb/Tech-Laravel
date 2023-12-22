<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function aboutus(){
        return view('frontend.aboutus');
    }

   
    public function development(){
        return view('frontend.development');
    }
    public function contactUs(){
        return view('frontend.contact-us');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function designing(){
        return view('frontend.designing');
    }
    public function enterpriseSolution(){
        return view('frontend.enterprise-solutions');
    }
    public function cloudSolutions(){
        return view('frontend.cloud-solutions');
    }
    public function itConsulting(){
        return view('frontend.it-consulting');
    }
    public function career(){
        return view('frontend.career');
    }
    public function ourWork(){
        return view('frontend.our-work');
    }
    public function ourTeam(){
        return view('frontend.our-team');
    }
    public function ourWorkDetail(){
        return view('frontend.our-work-detail');
    }
    public function privacyPolicy(){
        return view('frontend.privacy-policy');
    }
    public function termsofService(){
        return view('frontend.terms-of-service');
    }
    public function jobOpenings(){
        return view('frontend.job-openings');
    }
}
