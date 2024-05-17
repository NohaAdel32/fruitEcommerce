<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=$request->validate([
            'title'=>'required|string|max:255',
            'description' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            
            ]);
            Post::create($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post=$request->validate([
            'title'=>'required|string|max:255',
            'description' => 'required|string|max:255',
            'comment' => 'required|string|max:255',
            
            ]);
            Post::where('id', $id)->update($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
    }
}
