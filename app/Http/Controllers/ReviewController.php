<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use Storage;




class ReviewController extends Controller
{
    public function hp(Review $review)
    {
        return view('users/hp')->with(['reviews'=>$review->getByPaginateLimit()]);//usersの配下//
    }
    public function detail(Review $review)
    {
        return view('users/detail')->with(['review'=>$review]);
    }
    public function post()
    {
        return view('users/post');
    }
    public function store(ReviewRequest $request,Review $review )
    {
        $input = $request['review'];
        $review->fill($input);
        $image = $request->file('image');
        
        $path = Storage::disk('s3')->putFile('myprefix', $image,'public');
        $review->image_path = Storage::disk('s3')->url($path);
        $review->abv = 3;
        $review->price=100;
        
        $review->save();
        
        
    
        return redirect('/users/' .$review->id);
    }
    
}
