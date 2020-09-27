<?php


namespace App\Services\General\Course;


use App\Entities\Course;
use App\Services\BaseService;

class CourseService extends BaseService
{
    public function model()
    {
       return  Course::class;
    }

}
