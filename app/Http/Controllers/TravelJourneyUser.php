<?php

namespace App\Http\Controllers;

use App\TravelJourney;
use Illuminate\Http\Request;

class TravelJourneyUser extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelJourney::paginate(8);
        return view('pages.traveljourney');
    }
}