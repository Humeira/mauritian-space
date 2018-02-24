<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Api\Event as Event;

class EventController extends Controller
{

    public function show()
    {
        $data = array();
        $eventList = new Event(env('MEETUP_API_COUNTRY'));
        $eventList = $eventList->FetchEvents();
        $data = [
            "events" => $eventList
        ];

        return $data;
    }
}
