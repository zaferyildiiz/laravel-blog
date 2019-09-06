<?php

namespace App\Http\Controllers\Admin;


//ok bi sn
use App\Model\Article;
use App\Model\User;
use App\Model\Category;

use Illuminate\Http\Request;
use Helpers;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

class Articlee extends Controller
 {

    public function index(Request $request)
    {
      if ($request->has('button'))
      {

        $author=$request->author;
        $title= $request->title;
        $content= $request->editor1;
        $kategori_id= $request->kategori_id;
        $status=$request->status;
        $slug=Helpers::seo($title);
        $path = "public/img/post/{$slug}.jpg";

       $img = Image::make($request->imagess);
       $img->save("public/img/post/{$slug}.jpg");


      $insert = Article::insert([
        'authorid'=>$author,
        'kategori_id'=>$kategori_id,
        'slug'=>$slug,
        'title'=>$title,
        'content'=>$content,
        'status'=>$status,
        'image_path'=>$path,
      ]);

      if($insert)
      {
        session()->flash('basarili', 'Task was successful!');
        redirect('/admin/article');
      }
    }
    if ($request->has('btn2'))
    {

      $id=$request->id;
      $authorid=$request->author;
      $title=$request->title;
      $slug=Helpers::seo($title);
      $kategori_id=$request->kategori_id;
      $content=$request->editor1;
      $status=$request->status;
      $image_path="public/img/post/".$slug.".jpg";


      $validatedData = $request->validate([
       'title' => 'required|max:255',
        'imagess'=>'required',
       'editor1'=>'required|max:10000'
        ]);

     $guncelle = Article::where('id',$id)->update([
       'title'=>$title,
       'slug'=>$slug,
       'content'=>$content,
       'authorid'=>$authorid,
       'kategori_id'=>$kategori_id,
       'status'=>$status,
       'image_path'=>$image_path
     ]);

     if($guncelle)
     {
       session()->flash('guncelleme','sedfsdfs');
       redirect('/admin/article');
     }

      // read image from temporary file
      $img = Image::make($_FILES['imagess']['tmp_name']);
      // save image
      $img->save('public/img/post/'.$slug.".jpg");
    }

      $category=Category::all();
      $article=Article::all();
      $user=User::all();
      return view('admin.Article.article',['article'=>$article,'user'=>$user,'category'=>$category]);
  }

    public function insertArticle()
    {
      $category=Category::all();
      $user = User::all();
      return view('admin.article.insert',['user'=>$user,'category'=>$category]);
    }
    public function update($id)
    {
      $category=Category::all();
      $user = User::all();
      $article= Article::find($id);
      return view('admin.article.updateArticle',(['user'=>$user,'article'=>$article,'category'=>$category]));
    }
    public function delete($id)
    {
      $delete = Article::where('id',$id)->delete();
      if($delete)
      {
        session()->flash('silme','sdfsdfsdf');
         return redirect('/admin/article');
      }
    }
}
