<?php


namespace App\Services\General\Abroad;


use App\Entities\Abroad;
use App\Services\BaseService;

class AbroadService extends BaseService
{
       public function model()
       {
           return Abroad::class;
       }
}
