<?php

namespace App\Entities;

use App\Entities\Events;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table = 'UserJoinEvent';
    public $timestamps = false;

    protected $fillable = [
        'user_email',
        'event_id'
    ];
    
    public function event()
    {
        return $this->hasMany(Events::class, 'id', 'event_id');
    }
}