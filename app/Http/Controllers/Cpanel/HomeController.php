<?php

namespace App\Http\Controllers\Cpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return self::cView('index');
    }
}