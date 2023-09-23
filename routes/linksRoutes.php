<?php

use App\Models\Ellink;
use App\Models\Ellist;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/link/{id}', function ($id) {
    // TODO >> Url is Unique and We Can Make Use of it
    $viewedLink = Ellink::find($id);
    $currentUserId = request()->user()->id;
    // Query to fetch reviews excluding the ones with the current requester's user ID
    $linkReviews = Review::where('ellink_id', $viewedLink->id)
        ->whereNotIn('user_id', [$currentUserId])
        ->get();
    // Execlude the Review Of the Current User  ;
    // $poops  = Review::where('ellink_id', $viewedLink->id)
    //     ->where('rating', -1)
    //     ->count();
    // $hearts   = Review::where('ellink_id', $viewedLink->id)
    //     ->where('rating', -7)
    //     ->count();
    // $Ratings = Review::where('ellink_id', $viewedLink->id)
    //     ->whereNotIn('rating', ['-1', '-7'])->get(); // TODO use sum()

    // $normalRatings = Review::where('ellink_id', $viewedLink->id)
    //     ->whereNotIn('rating', ['-1', '-7'])
    //     ->count();
    // $total  =  0;
    // foreach ($Ratings as $rating) {
    //     $total += (int)$rating->rating;
    // }
    // if ($normalRatings == 0) {
    //     $normalRatings = 1;
    // }
    // $avg = $total / $normalRatings;
    return view('link.link-page', compact(['viewedLink', 'linkReviews']));
})->name('view-link');
