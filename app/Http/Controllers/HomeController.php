<?php

namespace App\Http\Controllers;

use App\Entities\Feedback;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages/home');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        return view('pages/main');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function collection()
    {
        return view('pages/collection');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rating()
    {
        return view('pages/rating');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function upcoming()
    {
        return view('pages/upcoming');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('pages/welcome');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages/contact');
    }

    /**
     * @param ContactFormRequest $request
     * @return mixed
     */
    public function store(ContactFormRequest $request)
    {
        $feedback = Feedback::create($request->all());
        
        Mail::send('pages.email', [
            'feedback' => $feedback
        ], function ($m) use ($feedback) {
            $m->from('user@mail.com');
            $m->to($feedback->email);
        });
        
        return \Redirect::route('user.email.show', [
            'Feedback' => $feedback
        ]);
    }

    public function emailSent(Feedback $feedback) 
    {
        return view('pages.email_sent', [
            'feedback' => $feedback
        ]);
    }
}

