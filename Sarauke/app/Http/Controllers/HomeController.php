<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])
        ->limit(8)
        ->get();
        $slide_all = Slide::get();
        return view('pages.home',[
            'items' => $items,
            'slide_all' => $slide_all
        ]);
    }
}
