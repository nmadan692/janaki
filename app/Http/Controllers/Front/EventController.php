<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('front.event.event');
    }
    public function show(){


        return view('front.event.event-details');
    }
}
