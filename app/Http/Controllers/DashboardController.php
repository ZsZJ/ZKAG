<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'api.openweathermap.org/data/2.5/weather?q=Rotterdam,nl&units=metric&lang=nl&APPID=7b38e4f8597e13d54f1bca98c4051672');
        $result = curl_exec($ch);
        curl_close($ch);

        $weather = json_decode($result);

        return view('pages.dashboard', compact('weather'));
    }
}
