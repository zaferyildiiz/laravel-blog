<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categories extends Controller
{
    public function index(Request $request)
    {
      if($request->has('button1'))
      {
        $id=$request->id;
        $name=$request->name;
        $update = Category::where('id',$id)->update([
          'name'=>$name,
          'slug'=>Helpers::seo($name)
        ]);
        if($update)
        {
          session()->flash('update','sdfdsf');
          redirect('admin/categories');
        }
      }
      if ($request->has('buttonn'))
      {
        $kategoriname= $request->categoryname;
        $slug= Helpers::seo($kategoriname);
        $insert = Category::insert([
          'name'=>$kategoriname,
          'slug'=>$slug
        ]);
        if($insert)
        {
          session()->flash('insert');
          redirect('admin/categories.categories');
        }
      }
      $kategori = Category::all();
      return view('admin.categories.categories',['kategoriler'=>$kategori]);
    }
    public function insert()
    {
      return view('admin.categories.insert');
    }
    public function update($id)
    {
      $category = Category::find($id);
      return view('admin.categories.update',(['category'=>$category]));
    }
    public function delete($id)
    {
      $delete= Category::where('id',$id)->delete();
      if($delete)
      {
        session()->flash('delete');
        return redirect('admin/categories');
      }
    }
}
