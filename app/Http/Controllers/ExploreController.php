<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackage;

class ExploreController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])
        ->paginate(8);
        return view('pages.explore',[
            'items' => $items
        ]);
    }
    public function cari(Request $request)
    {
        // return $request;
        $items = TravelPackage::where('title','like',"%".$request->search."%")
        ->paginate(8);
        return view('pages.explore',[
            'items' => $items
        ]);
    }
}
