<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Mesajlar;

class Message extends Controller
{
    public function index()
    {
      $messages=Mesajlar::all();
      return view('admin.messages.messages',['messages'=>$messages]);
    }
    public function deleteMessages($id)
    {
      $delete = Mesajlar::where('id',$id)->delete();
      if($delete)
      {
        session()->flash('success');
        return redirect('/admin/messages');
      }
    }
}
