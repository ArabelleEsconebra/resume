<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SampleController extends BaseController
{
    public function another()
    {
        return view("test/another");
    }
}
