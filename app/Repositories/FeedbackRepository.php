<?php
/**
 * Created by PhpStorm.
 * User: olhakh
 * Date: 18.07.16
 * Time: 19:58
 */

namespace App\Repositories;


use App\Entities\Feedback;

class FeedbackRepository
{
    protected $model;
    
    public function __construct(Feedback $feedback)
    {
        $this->model = $feedback;
    }
    
    public function all()
    {
        return $this->model->all();
    }
}