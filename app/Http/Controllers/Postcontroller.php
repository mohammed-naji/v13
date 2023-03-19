<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::orderBy('id', 'desc')->get();
        $posts = Post::orderByDesc('id')->get();
        // $posts = Post::latest('created_at')->get();

        // dd($posts);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // validation
        $request->validate([
            'title' => 'required|min:4|max:50',
            'image' => 'required|image|mimes:png,jpg,svg',
            'content' => 'required'
        ]);

        // upload file
        $imagename = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/uploads/posts'), $imagename);

        // save to database

        // Query Builder
        // DB::table('posts')->insert([
        //     'title' => $request->title,
        //     'image' => $imagename,
        //     'content' => $request->content,
        // ]);

        // Eloquent ORM
        Post::create([
            'title' => $request->title,
            'image' => $imagename,
            'content' => $request->content,
        ]);

        // redirect user
        return redirect()->route('posts.index');
        // return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // return 'done';
        Post::destroy($id);
        // DELETE FROM posts WHERE id = 5

        return redirect()->route('posts.index');
    }
}
