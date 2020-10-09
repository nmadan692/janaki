<?php


namespace App\Services\General\Download;


use App\Entities\Download;
use App\Services\BaseService;

class DownloadService extends BaseService
{
    public function model()
    {
        return Download::class;
    }
}
