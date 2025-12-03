<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Tag::all();
        return view('tag.index',['tags'=>$data,"pageTitle"=>"Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag=Tag::create([
          'title'=>'css'
        ]);
        return redirect('/tags');
    }
    public function testManyToMany(){
    /* $post1=Post::find(1);
      $post5=Post::find(5);

      $post1->tags()->attach([1,2]);
      $post5->tags()->attach([1]);

      return response()->json(([
        'post1'=>$post1->tags,
        'post5'=>$post5->tags
      ]));*/

      $tag=Tag::find(1);

      $tag->posts()->attach([1]);

      return response()->json(([
        'tag'=>$tag->title,
        'posts'=>$tag->posts
      ]));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag=Tag::find($id);
        return view('tag.show',['tag'=>$tag,"pageTitle"=>$tag->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
