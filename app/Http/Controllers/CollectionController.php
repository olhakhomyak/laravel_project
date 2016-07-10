<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CollectionController extends Controller
{
    public function index() 
    {
        return view('collection');
    }
}
