<?php


namespace App\Services\General\Notice;


use App\Entities\Notice;
use App\Services\BaseService;

class NoticeService extends BaseService
{
     public function model()
     {
         return Notice::class;
     }
}
