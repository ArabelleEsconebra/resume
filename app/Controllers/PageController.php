<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PageController extends BaseController
{
    public function website()
    {
        return view("github/webindex");
    }
    public function home()
    {
        return view("github/home");
    }

    public function about()
    {
        return view("github/about");
    }

    public function facts()
    {
        return view("github/facts");
    }

    public function education()
    {
        return view("github/education");
    }

    public function contact()
    {
        return view("github/contact");
    }

    public function bulma()
    {
        return view("github/index-bulma");
    } 
    
    public function post()
    {
        return view("github/new_post");
    }

}
