<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\General\Download\DownloadService;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * @var DownloadService
     */
    private $downloadService;

    /**
     * DownloadController constructor.
     * @param DownloadService $downloadService
     */
    public function __construct(
        DownloadService $downloadService
    )
    {
        $this->downloadService = $downloadService;
    }

    public function index() {
        $downloads = $this->downloadService->all();
        return view('front.download.download', compact('downloads'));
    }
}
