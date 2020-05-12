<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Event;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function publishEvent($topic, Request $request)
    {
        $json = json_encode($request->getContent());
        // validate url exists

        $event = new Event();
        $event->topic = $topic;
        $event->body = $json;

        if($event->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'eventId' => $event->id
                    ]
                ], 201
            );
        }
        return $response;
    }
}