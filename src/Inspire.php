<?php

namespace Leo3914\Inspire;
use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoit()
    {
        $response = Http::get('https://zenquotes.io/api/random');
        // return $response[0]['q'].'<b> is written by </b>'.$response[0]['a'];

        return $response[0];
    }
}
