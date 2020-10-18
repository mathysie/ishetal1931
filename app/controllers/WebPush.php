<?php

declare(strict_types=1);

namespace app\controllers;

use app\models\Subscription;
use mako\http\routing\Controller;

class WebPush extends Controller
{
    public function CreateSubscription()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $subscription = new Subscription($data['endpoint'], $data['publicKey'], $data['authToken']);
        $subscription->save();
    }

    public function UpdateSubscription()
    {
        $subscription = Subscription::where('subscription', '=', $_PUT['subscription'])->first();
        $subscription->subscription = 'new data';
        $subscription->save();
    }

    public function DeleteSubscription()
    {
        $subscription = Subscription::where('subscription', '=', $_POST['subscription'])->first();
        $subscription->delete();
    }
}
