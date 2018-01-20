<?php

namespace App\Http\Controllers\Premium;

use App\Event;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AgendaController extends Controller
{
    public function __invoke()
    {
        /** get the events bind by user @var  $events */
        $events = Event::where('users_id', Auth::user()->id)->get();

        /** pass to js @var  $javaScriptVars */
        $javaScriptVars = ['events' => $events ];

        /** return the view */
        return view('pages.premium.agenda', compact('javaScriptVars'));
    }
}
