<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber as Susbcriber;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {
        dd($request->request->get('email'));
    }
}
