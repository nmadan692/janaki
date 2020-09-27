<?php


namespace App\Services\General\Banner;


use App\Entities\Banner;
use App\Services\BaseService;

class BannerService extends BaseService
{
     public function model()
     {
         return Banner::class;
     }
}
