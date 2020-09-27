<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\General\Course\CourseService;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * @var CourseService
     */
    private $courseService;

    /**
     * CoursesController constructor.
     * @param CourseService $courseService
     */
    public function __construct(
        CourseService $courseService
    )
    {
        $this->courseService = $courseService;
    }

    public function index() {
        $courses = $this->courseService->all();
        return view('front.courses.courses', compact('courses'));
    }
    public function show($id){
        $course = $this->courseService->findOrFail(decrypt($id));


        return view('front.courses.course-details', compact('course'));
    }
}
