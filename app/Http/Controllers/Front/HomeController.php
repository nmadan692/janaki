<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\General\About\AboutService;
use App\Services\General\Banner\BannerService;
use App\Services\General\Blog\BlogService;
use App\Services\General\Course\CourseService;
use App\Services\General\Notice\NoticeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var AboutService
     */
    private $aboutService;
    /**
     * @var CourseService
     */
    private $courseService;
    /**
     * @var BlogService
     */
    private $blogService;
    /**
     * @var NoticeService
     */
    private $noticeService;
    /**
     * @var BannerService
     */
    private $bannerService;

    /**
     * HomeController constructor.
     * @param AboutService $aboutService
     * @param CourseService $courseService
     * @param BlogService $blogService
     * @param NoticeService $noticeService
     * @param BannerService $bannerService
     */
    public function __construct(
        AboutService $aboutService,
        CourseService $courseService,
        BlogService $blogService,
        NoticeService $noticeService,
        BannerService $bannerService
    )
    {
        $this->aboutService = $aboutService;
        $this->courseService = $courseService;
        $this->blogService = $blogService;
        $this->noticeService = $noticeService;
        $this->bannerService = $bannerService;
    }

    public function index() {
        $about = $this->aboutService->all();
        $recentCourses = $this->courseService->take(3, 'desc');
        $recentBlogs = $this->blogService->take(3, 'desc');
        $notices = $this->noticeService->all();
        $banners = $this->bannerService->all();


        return view('front.home.index', compact('about', 'recentCourses', 'recentBlogs', 'notices', 'banners'));
    }
}
