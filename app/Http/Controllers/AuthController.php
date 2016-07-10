<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'userName' => "min:2|required",
            'userEmail' => 'required|email'
        ]);
        
        return view('authentication');
    }
}
