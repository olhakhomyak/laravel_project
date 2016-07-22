<?php
/**
 * Created by PhpStorm.
 * User: olhakh
 * Date: 20.07.16
 * Time: 16:47
 */

namespace App\Repositories;

use App\Entities\Events;
use Carbon\Carbon;

class EventsRepository
{
    protected $model;

    public function __construct(Events $events)
    {
     $this->model = $events;
    }

    public function getEvents()
    {
        return $this->model->orderBy('date', 'asc')->where('date', '>=', Carbon::now())->where('date', '<=', Carbon::now()->addWeek())->get();
    }
    
    public function getDay($id)
    {
        return $this->model->find($id);
    }
    
    public function createEvent($arr)
    {
        return $this->model->create($arr);
    }
 }