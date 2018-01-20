<?php
/**
 * Created by PhpStorm.
 * User: joeylim
 * Date: 17-01-18
 * Time: 02:59
 */

namespace App\Http\Controllers;
use App\Therapist;
use App\Event;
use Illuminate\Http\Request;

class TherapistController extends Controller
{
    public function index()
    {
        $therapists = Therapist::all();
        return view('therapist.index', compact('therapists'));
    }

    public function show($id)
    {
        $therapist = Therapist::find($id);

        return view('therapist.show', compact('therapist'));
    }

    public function store(Request $request)
    {
        /** @var  $startDate */
        $startDate = date('Y-m-d', strtotime($request->event_start['date']));
        /** @var  $endDate */
        $endDate = date('Y-m-d', strtotime($request->event_start['date']));

        /** @var  $fullDay */
        $fullDay = 0;



        $startDate .= " ".$request->event_start['time'];

        $endTime = strtotime($request->event_start['time']) + 60*60;
        $time = date('H:i:s', $endTime);

        $endDate .= " ".$time;

        /** @var  $event db instance */
        $event = new Event;

        /** @var set the values for db */
        $event->title = $request->name;
        $event->users_id = $request->users_id;
        $event->date_start = $startDate;
        $event->date_end = $endDate;
        $event->full_day = $fullDay;
        $event->color = "#16a085";

        /** Save the event */
        $event->save();

        /** Return back to Calendar */
        return redirect('/');
    }
}