<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('reviews.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->title = $request->title;
        $review->user_id = Auth::user()->id;
        $review->product_id = $request->product_id;
        $review->body = $request->body;
        $review->rating = $request->rating;
        $review->save();

        return redirect('/reviews')->with('message', 'Review Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $products = Product::all();
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {


        $review->title = $request->title;
        $review->user_id = Auth::user()->id;
        $review->product_id = $request->product_id;
        $review->body = $request->body;
        $review->rating = $request->rating;
        $review->save();

        return redirect('/reviews')->with('status', 'Review Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $review
     * @return \Illuminate\Http\Response
     */
    public function delete(Review $review)
    {
        return view('reviews.delete', compact('review'));
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('status', 'Review Deleted');
    }
}
