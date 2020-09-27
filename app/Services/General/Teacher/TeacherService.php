<?php


namespace App\Services\General\Teacher;


use App\Entities\Teacher;
use App\Services\BaseService;

class TeacherService extends BaseService
{
         public function model()
         {
            return Teacher::class;
         }
}
