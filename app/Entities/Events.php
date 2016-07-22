<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{   
    protected $table = 'events';

    public $timestamps = false;
    
    protected $fillable = ['title', 'desription', 'short_description', 'date', 'image_url'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
