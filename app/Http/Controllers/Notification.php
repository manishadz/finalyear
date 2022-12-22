<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\BiddingNotification;


class Notification extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sendNotification()
    {
        $user = User::findOrFail(2);


        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for bidding',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => ''.$user->name.' having email address '.$user->email.' bidded.'
        ];
        $user->notify(new BiddingNotification($details));

        dd('done');
    }
}
