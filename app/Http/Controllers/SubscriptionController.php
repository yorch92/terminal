<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
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

    public function createSubscription($topic, Request $request)
    {
        $json = json_decode($request->getContent(), true);
        // validate url exists

        $subscription = new Subscription();
        $subscription->topic = $topic;
        $subscription->url = $json['url'];

        if($subscription->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'subscriptionId' => $subscription->id
                    ]
                ], 201
            );
        }
        return $response;
    }

    public function getSubscriptionsByEvent($event)
    {
        $subscriptions = new Subscription();
        $baseUrl = 'http://localhost:8000/';
        $subsByEvent = $subscriptions->where('url',$baseUrl.$event)->get();
        // print('<pre>'.print_r($subsByEvent,true).'</pre>');die();
        // foreach ($allSubs as $key => $sub) {
        //     var_dump($sub->url);die();
        // }
        
        return view('event', ['subs' => $subsByEvent]);
    }

    public function getSubscriptions()
    {
        $subscriptions = new Subscription();

        return $subscriptions->all();
    }
}