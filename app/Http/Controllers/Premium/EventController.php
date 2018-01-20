<?php

namespace App\Http\Controllers\Premium;

use App\Event;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /** @var  $startDate */
        $startDate = date('Y-m-d', strtotime($request->event_start['date']));
        /** @var  $endDate */
        $endDate = date('Y-m-d', strtotime($request->event_end['date']));
        /** @var  $fullDay */
        $fullDay = 1;

        /**
         * Check if time start end is filled and
         * the full day option is selected
         */
        if (isset($request->event_start['time']) && isset($request->event_end['time']))
        {
            /** Append time to start date */
            $startDate .= " ".$request->event_start['time'];
            /** Append time to end date */
            $endDate .= " ".$request->event_end['time'];
            /** @var $fullDay is set */
            $fullDay = 0;
        }
        else
        {
            $endDate = new DateTime($endDate);
            $endDate->modify('+1 day')->format('Y-m-d');
        }

        /** @var  $event db instance */
        $event = new Event;

        /** @var set the values for db */
        $event->title = $request->title;
        $event->users_id = Auth::user()->id;
        $event->date_start = $startDate;
        $event->date_end = $endDate;
        $event->full_day = $fullDay;
        $event->color = "#16a085";

        /** Save the event */
        $event->save();

        /** Return back to Calendar */
        return redirect()->route('agenda');
    }

    /**
     * Show the event for the clicked event.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // Get the event by id
        $event = Event::findOrFail($id);

        if( $event->users_id == Auth::user()->id)
        {
            // Format to suitable date time and explode date and time
            $tmp['start'] = explode('/', date('d. M Y / H:i', strtotime($event->date_start)));
            $tmp['end'] = explode('/', date('d. M Y / H:i', strtotime($event->date_end)));

            // Set the formatted evenst back in object
            $event->date_start = $tmp['start'][0];
            $event->time_start = $tmp['start'][1];
            $event->date_end = $tmp['end'][0];
            $event->time_end = $tmp['end'][1];

            // Set some javascript vars
            $javaScriptVars = [
                'full_day' => $event->full_day
            ];

            return view('pages.premium.event.edit', compact('event', 'javaScriptVars'));
        }
        else
        {
            return redirect()->route('agenda');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var  $startDate */
        $startDate = date('Y-m-d', strtotime($request->event_start['date']));
        /** @var  $endDate */
        $endDate = date('Y-m-d', strtotime($request->event_end['date']));
        /** @var  $fullDay */
        $fullDay = 1;

        /**
         * Check if time start end is filled and
         * the full day option is selected
         */
        if (isset($request->event_start['time']) && isset($request->event_end['time'])) {
            /** Append time to start date */
            $startDate .= " ".$request->event_start['time'];
            /** Append time to end date */
            $endDate .= " ".$request->event_end['time'];
            /** @var $fullDay is set */
            $fullDay = 0;
        }
        else
        {
            $endDate = new DateTime($endDate);
            $endDate->modify('+1 day')->format('Y-m-d');
        }

        /** @var  $event db instance */
        $event = Event::find($id);

        /** @var set the values for db */
        $event->title = $request->title;
        $event->date_start = $startDate;
        $event->date_end = $endDate;
        $event->full_day = $fullDay;
        $event->color = "#16a085";

        // Update event
        $event->save();

        /** Return back to Calendar */
        return redirect()->route('agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return redirect()->route('agenda');
    }
}
