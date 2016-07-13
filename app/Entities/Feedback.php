<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
     * @var string
     */
    protected $table = 'feedbacks';
    
    /**
     * @var array
     */
    protected $fillable = [
        'email', 
        'message'
    ];
}
