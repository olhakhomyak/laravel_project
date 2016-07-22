<?php

namespace App\Http\Controllers;

use App\Repositories\EventsRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function createEvent()
    {
     return view('pages.adCreateEvent');   
    }
    
    public function storeEvent(Request $request, EventsRepository $eventsRepository)
    {
        $this->validate($request, [
            'title'              => 'required|max:255',
            'description'        => 'required',
            'short_description'  => 'required',
            'image_url'          => 'required',
            'date'               => 'required|date'
        ]);
        
        $eventsRepository->createEvent([
            'title'              => $request->get('title'),
            'description'        => $request->get('description'),
            'short_description'  => $request->get('short_description'),
            'image_url'          => $request->get('image_url'),
            'date'               => $request->get('date') 
        ]);
        
        return redirect(route('Rating'));
    }
}
