<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Model\User;
use App\Model\Category;
use App\Model\Article;
use App\Model\Comment;
use App\Model\Mesajlar;
class Main extends Controller
{
    public function index()
    {
      $lastArticle=Article::orderBy('id', 'desc')->limit(3)->get();

      $kategoriler = Category::all();
      $articles    = Article::all();
      return view('site.pages.left', [
        'category'=>$kategoriler,
        'article'=>$articles,
        'lastArticle'=>$lastArticle,
      ]);
    }
    public function insertUsers(Request $request)
    {
      if($request->has('btn1'))
      {
        $validatedData = $request->validate
        ([
           'fullname' => 'required|max:255|min:4',
           'username' => 'required|max:255|min:4',
           'email' => 'email|required|max:255|min:4',
           'password' => 'required|max:255|min:4',
         ]);

        $fullname = $request->fullname;
        $username = $request->username;
        $email    = $request->email;
        $password = Hash::make($request->password);

        $insert = User::insert
        ([
          'fullname'=>$fullname,
          'username'=>$username,
          'email'=>$email,
          'password'=>$password
        ]);
        if($insert)
        {
          session()->flash('insert');
          return  redirect('/');
        }
      }
      return view('site.pages.insertUsers');
    }

    public function devam($id)
    {
      $category  = Category::all();
      $kategori  = Category::find($id);
      $article   = Article::where('id',$id)->first();
      $user      = User::find($article->authorid);
      $comment   = Comment::all();

      return view('site.pages.post',['kategori'=>$kategori,'article'=>$article,'user'=>$user,'category'=>$category,'comments'=>$comment]);
    }
    public function insertComment(Request $request)
    {
      $article_id = $request->article_id;
      $fullname   = $request->fullname;
      $email      = $request->email;
      $comment    = $request->comment;


      $insert=Comment::insert([
        'article_id'=>$article_id,
        'fullname'=>$fullname,
        'email'=>$email,
        'comment'=>$comment
      ]);

      if($insert)
      {
        session()->flash('success');
        return redirect()->back();
      }
    }
    public function contact()
    {
      $category = Category::all();
      return view('site.pages.contact',['category'=>$category]);
    }
    public function sendMessage(Request $request)
    {
      $fullname = $request->fullname;
      $messages = $request->messages;
      $email    = $request->email;

      $send = Mesajlar::insert([
        'fullname'=>$fullname,
        'messages'=>$messages,
        'email'=>$email,
      ]);
      if($send)
      {
        session()->flash('success');
        return redirect('/');
      }
    }
    public function category($id)
    {
     $category= Category::all();
     $categoryy = Category::find($id); 
     $article  = Article::all();
     return view('site.pages.category',['categoryy'=>$categoryy,'article'=>$article,'category'=>$category]);
    }

}
