<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HeheController extends BaseController
{
    public function this()
    {
        return view("test/this");
    }
}
