<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function submitReview(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'rating_review' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        Review::create([
            'nama_user' => $request->nama_user,
            'rating_review' => $request->rating_review,
            'comment' => $request->comment,
        ]);

        return redirect()->route('home')->with('success', 'Review submitted successfully!');
    }

    public function index()
    {
        $reviews = Review::latest()->get();
        return view('home', compact('reviews'));
    }
}

