<?php
namespace Leo3914\Inspire\Controllers;

use Leo3914\Inspire\Inspire;

class InspirationController
{
    public function index()
    {
        $inspire = new Inspire;
        $quote = $inspire->justDoit();

        return view('inspire::index', compact('quote'));
    }
}
