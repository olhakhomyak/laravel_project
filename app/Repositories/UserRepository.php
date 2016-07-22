<?php

namespace App\Repositories;


use App\Entities\User;

class UserRepository
{
    protected $model;
    
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    public function all() 
    {
        return $this->model->all();
    }

}