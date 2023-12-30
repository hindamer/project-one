<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(){
        return view('user');
    }
    public function insertdata(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect()->route('getdata');
    }
    public function getdata(){
        $users=User::get();
        return view('table',['users'=>$users]);
    }
    public function edituser(string $id){
    $usr=User::findOrFail($id);
    return view('updateuser',['usr'=>$usr]);

   }
   public function update(Request $request,string $id){
    User::where('id',$id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password
    ]);
    return redirect()->route('getdata');
   }

}
