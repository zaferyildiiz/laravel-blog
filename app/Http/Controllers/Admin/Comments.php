<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Article;

class Comments extends Controller
{
    public function index()
    {
      $article  = Article::all();
      $comments = Comment::all();
      return view('admin.comments.comments',['comments'=>$comments,'article'=>$article]);
    }
    public function deleteComment($id)
    {
      $delete = Comment::where('id',$id)->delete();
      if($delete)
      {
        session()->flash('deleteSuccess');
        return redirect('admin/comments');
      }
    }
}
