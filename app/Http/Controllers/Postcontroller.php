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
        // $posts = Post::orderByDesc('id')->paginate(4);
        $posts = Post::orderByDesc('id')->simplepaginate(4);
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
        return redirect()->route('posts.index')
        ->with('msg', 'Post added Successfully')
        ->with('type', 'success');
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
        $post = Post::with('comments.user')->findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // if(!$post) {
        //     abort(500, 'Unauthorized.');
        // }

        // dd($post->title);
        return view('posts.edit', compact('post'));
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
        $request->validate([
            'title' => 'required|min:4|max:50',
            'image' => 'nullable|image|mimes:png,jpg,svg',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')) {
            // upload file
            $imagename = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/uploads/posts'), $imagename);
        }else {
            $imagename = $post->image;
        }

        // save to database

        // Eloquent ORM
        $post->update([
            'title' => $request->title,
            'image' => $imagename,
            'content' => $request->content,
        ]);


        // redirect user
        return redirect()->route('posts.index')
        ->with('msg', 'Post Updated Successfully')
        ->with('type', 'info');
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

        return redirect()->route('posts.index')
        ->with('msg', 'Post deleted Successfully')
        ->with('type', 'danger');
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trash', compact('posts'));
    }

    public function restore($id)
    {
        Post::onlyTrashed()->find($id)->restore();

        return redirect()->route('posts.index');
    }

    public function forcedelete($id)
    {
        Post::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('posts.index');
    }
}
