<?php

namespace App\Repositories;

use App\Entities\UserEvent;


class UserEventRepository
{
    protected $model;

    public function __construct(UserEvent $userEvent)
    {
        $this->model = $userEvent;
    }
    
    public function subscribeEmailToEvent($attributes)
    {
        return UserEvent::create($attributes);
    }
    
    public function getAllSubscribers()
    {
        return $this->model->with('event')->get();
    }
}