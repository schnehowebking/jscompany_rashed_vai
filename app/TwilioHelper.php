<?php

namespace App;

use Twilio\Rest\Client;

class TwilioHelper
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
    }

    public function sendSMS($to, $body)
    {
        return $this->client->messages->create(
            $to,
            [
                'from' => config('services.twilio.phone_number'),
                'body' => $body,
            ]
        );
    }
}
