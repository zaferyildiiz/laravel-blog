<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Controllers\Controller;
use Validator;

class Userr extends Controller
{
  public function login()
  {
    return view('admin.login');
  }
  public function admin()
  {
    return view('admin.pages.content');
  }
  public function user(Request $request)
  {
    if($request->isMethod('post'))
    {
      $validatedData = $request->validate([
          'fullname' => 'required|max:100',
          'username' => 'required|min:4',
          'email' => 'required|max:200',
          'password' => 'required|min:4',
          'class' => 'required',
      ]);
        $id=$request->id;
        $fullname=$request->fullname;
        $username=$request->username;
        $email=$request->email;
        $password=$request->password;
        $class=$request->class;

        $update = User::where('id',$id)->update([
          'fullname'=>$fullname,
          'username'=>$username,
          'email'=>$email,
          'password'=>$password,
          'rank'=>$class
        ]);
        if($update)
        {
          session()->flash('basarili',"Güncelleme işlemi başarıyla gerçekleşti");
        }
  }
    $user = User::get();
    return view('admin.user.user',['user'=>$user]);
  }
  public function update($id)
  {
    $user = User::find($id);
    return view('admin.user.update',['user'=>$user]);
  }
  public function delete($id)
  {
    $delete=User::where('id', $id)->delete();
    if($delete)
    {
    session()->flash('delete',"Güncelleme işlemi başarıyla gerçekleşti");
    return redirect('admin/user');
    }
  }
}
