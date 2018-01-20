<?php

namespace App\Http\Controllers\Premium;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.premium.index');
    }
}
