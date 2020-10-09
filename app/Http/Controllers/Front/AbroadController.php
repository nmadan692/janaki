<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\General\Abroad\AbroadService;
use Illuminate\Http\Request;

class AbroadController extends Controller
{
    /**
     * @var AbroadService
     */
    private $abroadService;

    /**
     * AbroadController constructor.
     * @param AbroadService $abroadService
     */
    public function __construct(
        AbroadService $abroadService
    )
    {
        $this->abroadService = $abroadService;
    }

    public function index() {
        $abroad = $this->abroadService->all();
        return view('front.abroad.abroad', compact('abroad'));
    }
    public function show($id){
        $abroad = $this->abroadService->findOrFail(decrypt($id));


        return view('front.abroad.abroad-details', compact('abroad'));
    }
}
