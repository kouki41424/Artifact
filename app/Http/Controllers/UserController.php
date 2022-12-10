<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function hp(User $post)
    {
        return view('users/hp')->with(['users' => $post->get()]);
    }

}