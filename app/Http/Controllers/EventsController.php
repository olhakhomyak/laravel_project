<?php

namespace App\Http\Controllers;

use App\Repositories\EventsRepository;
use App\Repositories\UserEventRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Entities\Events;
use App\Repositories\EventsRepository as Event;

class EventsController extends Controller
{
    private $eventRepository;
    
    /**
     * EventsController constructor.
     * @param Event $eventsRepository]
     */
    public function __construct(EventsRepository $eventsRepository, UserEventRepository $userEventRepository)
    {
        $this->eventRepository = $eventsRepository;
        $this->userEventRepository = $userEventRepository;
    }
    
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEvents()
    {
        $events = $this->eventRepository->getEvents();
        return view('pages.rating', ['events' => $events]);
    }

    
    public function subscribeToEvent(Request $request, $eventId, UserEventRepository $userEventRepository)
    {
        $userEventRepository->subscribeEmailToEvent([
            'user_email' => $request->user_join,
            'event_id'   => $eventId
        ]);
        return redirect(route('Rating'));
    }
    
    public function showAllSubscribers()
    {
        $subscribers = $this->userEventRepository->getAllSubscribers();

        return view('pages.showMembers', [
            'subscribers' => $subscribers
        ]);
    }
}
