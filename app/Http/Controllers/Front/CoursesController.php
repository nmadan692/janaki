<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index() {
        return view('front.courses.courses');
    }
    public function show(){


        return view('front.courses.course-details');
    }
}
