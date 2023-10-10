<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        return User:: all();
    }
    public function show($id){
        return User:: find($id);
    }
    public function destroy($id){
        return User:: find($id)->delete();
       // return redirect('/User/list');
    }
    public function update(Request $request,$id){
       $user =  User:: find($id);
       $user ->name = $request->name;
       $user ->email = $request->email;
       $user ->password = Hash::make($request->password);
       $user ->permission =$request->permission ;
       $user->save();
        //return redirect('/User/list');
    }
    public function store(Request $request){
       $user = new User();
       $user ->name = $request->name;
       $user ->email = $request->email;
       $user ->password = Hash::make($request->password);
       $user ->permission =$request->permission ;
       $user->save();
        //return redirect('/User/list');
    }
}
