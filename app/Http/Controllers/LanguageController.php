<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;

class LanguageController extends BaseController {

    public function chooser(Request $request) {

        app('cache')->forever('locale', $request->get('locale'));
        return Redirect::back();
    }
}