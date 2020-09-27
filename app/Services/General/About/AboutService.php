<?php


namespace App\Services\General\About;


use App\Entities\About;
use App\Services\BaseService;

class AboutService extends BaseService
{
        public function model()
        {
           return About::class;
        }
}
