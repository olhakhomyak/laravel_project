<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ValidationController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'userName' => 'required|min:2',
            'userEmail' => 'required|email',
        ]);
}}

