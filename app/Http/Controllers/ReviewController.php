<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Menyimpan review ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitReview(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'rating_review' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        // Simpan review ke dalam database
        $review = new Review();
        $review->nama_user = $request->nama_user;
        $review->rating_review = $request->rating_review;
        $review->comment = $request->comment;
        $review->save();

        // Redirect ke halaman tertentu atau memberikan respon JSON
        return redirect()->back()->with('success', 'Review berhasil disimpan.');
    }
}
