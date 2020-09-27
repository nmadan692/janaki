<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\General\Message\MessageService;
use App\Services\General\Teacher\TeacherService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * @var TeacherService
     */
    private $teacherService;
    /**
     * @var MessageService
     */
    private $messageService;

    /**
     * AboutController constructor.
     * @param TeacherService $teacherService
     * @param MessageService $messageService
     */
    public function __construct(
        TeacherService $teacherService,
        MessageService $messageService
    )
    {
        $this->teacherService = $teacherService;
        $this->messageService = $messageService;
    }

    public function index() {
        $teachers = $this->teacherService->all();
        $message = $this->messageService->all();

        return view('front.about.about', compact('teachers', 'message'));
    }
}
