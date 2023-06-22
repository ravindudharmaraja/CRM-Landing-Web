<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contacts()
    {
      
     
        $page_title = 'Contacts';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('pages.contact', compact('page_title', 'page_description','action','logo','logoText'));
    }
    public function home()
    {
      
     
        $page_title = 'Home';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('pages.home', compact('page_title', 'page_description','action','logo','logoText'));
    }
    public function pricing()
    {
      
     
        $page_title = 'Pricing';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('pages.pricing', compact('page_title', 'page_description','action','logo','logoText'));
    }
    public function feature()
    {
      
     
        $page_title = 'Fearure';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('pages.feature', compact('page_title', 'page_description','action','logo','logoText'));
    }
}
