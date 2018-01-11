<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Config;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $pagePrefix = '';

    private function setPrefix(array $trace)
    {
        dd($trace);

        $cname = explode('\\', $trace['class']);

        if(array_key_exists($cname[3], Config::get('modules'))) {
            $this->pagePrefix = Config::get('modules')[$cname[3]];
        } else {
            $this->pagePrefix = Config::get('modules')['default'];
        }
    }
}
