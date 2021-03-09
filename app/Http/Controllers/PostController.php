<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function addData(Request $req)
    {
       $post = new Post;
       $post->name=$req->name;
       $post->type=$req->type;
       $post->manufacture=$req->manufacture;
       $post->purchase=$req->purchase;
       $post->save();
       return redirect('home');
    }

    public function update(Request $req, $id )
    {
       $post = post::find($id);
       $post->name=$req->name;
       $post->type=$req->type;
       $post->manufacture=$req->manufacture;
       $post->purchase=$req->purchase;
       $post->save();
    }

    public function delete($id)
    {
       $post = post::find($id);
       $post->delete();
       return redirect('home');
    }   

}

