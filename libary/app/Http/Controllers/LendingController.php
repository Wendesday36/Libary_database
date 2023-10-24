<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LendingController extends Controller
{
    //
    public function index()
    {
        return Lending::all();
    }
    public function show($user_id, $copy_id, $start)

    {
        $lending = LendingController::show($user_id, $copy_id, $start);

        return $lending[0];
    }



    public function destroy($user_id, $copy_id, $start)

    {

        LendingController::show($user_id, $copy_id, $start)->delete();
    }
    public function update(Request $request, $id)
    {
        $lending =  Lending::find($id);
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
        //return redirect('/Lending/list');
    }
    public function store(Request $request)
    {
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
        //return redirect('/Lending/list');
    }
    public function lendingUser(){
        $user = Auth:: user();
        $lendings = Lending::with('user')->where('user_id','=',$user->id)->get();
        return $lendings;
    }
}
