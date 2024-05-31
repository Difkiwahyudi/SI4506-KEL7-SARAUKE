<?php

namespace App\Http\Controllers;

use App\TravelJourney;
use Illuminate\Http\Request;

class DetailTravelJourneyController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelJourney::where('slug', $slug)->firstOrFail();
        return view('pages.detailtraveljourney',[
            'item' => $item
        ]);
    }
}
