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
        $events = new Event(env('MEETUP_API_COUNTRY'));
        $events = $events->FetchEvents();
        // dd(gettype($events));
        return view('index')->with('events', $events);
    }
}
