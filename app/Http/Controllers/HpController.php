<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HpController;
use App\Models\Alcolol;
use App\Models\Review;

class HpController extends Controller
{
    public function hp(User $post)
    {
        return view('users/hp')->with(['users' => $post->get()]);
    }

}