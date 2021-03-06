<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index(Request $rq)
    {
        return view('user.user')
            ->with('posts', Post::where('user_id', '=' , $rq->id)->orderBy('created_at','desc')->get());
    }
}
