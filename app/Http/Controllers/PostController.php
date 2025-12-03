<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function Pest\Laravel\post;

class PostController extends Controller
{
  function index(){
    $data = Post::all();
    return view("post.index", ['post'=>$data,"pageTitle"=>"Blog"]);
  }
  function show($id){
    $post =Post::find($id);
    return view('post.show',['post'=>$post,"pageTitle"=>$post->title]);
  }
  function create(){
    $post=Post::create([
      'title'=>'My find unque post',
      'body'=>'This is to test find',
      'author'=>'jamal',
      'publised'=>true
    ]);
    return redirect('/blog');
  }
  function delete(){
    Post::destroy(6);
  }

}
