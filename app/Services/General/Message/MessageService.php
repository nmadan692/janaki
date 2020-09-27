<?php


namespace App\Services\General\Message;


use App\Entities\Message;
use App\Services\BaseService;

class MessageService extends BaseService
{
    public function model()
    {
        return Message::class;
    }

}
