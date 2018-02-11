<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Api\Event as Event;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $eventList = new Event(env('MEETUP_API_COUNTRY'));
        $eventList = $eventList->FetchEvents();
        $data = [
            "events" => $eventList
        ];
        return view('index')->with('data', $data);
    }
}
