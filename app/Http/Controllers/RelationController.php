<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Insurance;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function one_to_one()
    {

        // $user = User::find(2);

        // dd($user->insurance);

        // $in = Insurance::find(1);

        // dd($in->user);

        $users = User::with('insurance')->get();

        return view('realtions.one_to_one', compact('users'));

    }

    public function one_to_many()
    {
        $post = Post::find(13);

        dd($post->comments);
    }
}
