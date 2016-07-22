<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];
}