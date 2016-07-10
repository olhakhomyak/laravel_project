<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UpcomingController extends Controller
{
    public function index()
    {
        return view('upcoming');
    }
}
