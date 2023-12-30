<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use PhpParser\Node\Expr\Cast\String_;

class PostController extends Controller
{
   public function form_data(){
    return view('posts/form');
   }

   public function insert_form(Request $request){
    $post=new Post();
    $post->post_tittle=$request->post_tittle;
    $post->post_content=$request->post_content;
    $post->post_date=$request->post_date;
    $post->user_id=$request->user_id;
    $post->save();
    return redirect('/table');
   }
   public function get_data(){
    $posts=Post::get();
    return view('posts/table',compact('posts'));
   }
   public function show(string $id){
    $post=Post::findOrFail($id);
    return view('posts/show',compact('post'));
   }
   public function edit(string $id){
    $post=Post::findOrFail($id);
    return view('posts/update',compact('post'));
   }
   public function update(Request $request, string $id){
    Post::where('id',$id)->update([
        'user_id'=> $request->user_id,
        'post_tittle' => $request->post_tittle,
        'post_content' => $request->post_content,
        'post_date' => $request->post_date
    ]);
    return redirect('/table');
   }
   public function delete(string $id){
    Post::findOrFail($id)->delete();
    return redirect('/table'); 
   }
   public function deletepost(Request $request){
    $id=$request->id;
    Post::where('id',$id)->delete();
    return redirect('/table');
   }
}
