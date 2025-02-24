<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|numeric|between:1,5',
            'review' => 'required|string|max:1000',
        ]);

        // Create a new review
        $review = new Review();
        $review->product_id = $request->product_id;
        $review->user_id = Auth::id();
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->created_at = now();
        $review->updated_at = now();
        $review->save(); 

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}