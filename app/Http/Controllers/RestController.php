<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class RestController extends Controller
{

    function Home() {
        return view('home');
}
  function list() {
    $data= Restaurant::all();
    return view('list',['data'=>$data]);
  }

function add(Request $request){
    //return $request->input();

    $resto = new Restaurant;
    $resto->name = $request->input('name');
    $resto->email = $request->input('email');
    $resto->address = $request->input('address');
    $resto->save();
    $request->session()->flash('status',"Restaurant added to the list.");
    return redirect('list');
}

  function delete($id){
    Restaurant::find($id)->delete();
    Session::flash('status',"Restaurant deletd from the list.");
    return redirect('list');


  }

  function edit($id){
   $data = Restaurant::find($id);
   return view('edit',['data'=> $data]);

  }

  function update(Request $request){
    //return $request->input();

    $resto = Restaurant::find($request->input('id'));
    $resto->name = $request->input('name');
    $resto->email = $request->input('email');
    $resto->address = $request->input('address');
    $resto->save();
    $request->session()->flash('status',"Restaurant list updated successfully.");
    return redirect('list');
}

function register(Request $request){
    //return $request->input();
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password =Hash::make($request->input('password'));
    $user->save();
    $request->session()->put('user',$request->input('name'));
    return redirect('/');

}

function login(Request $request){
    $user = User::where('email', $request->input('email'))->first();
    if (!$user || !Hash::check($request->input('password'), $user->password)){
        return "User not found or incorrect password";
    } else {
        $request->session()->put('user', $user->name); // Storing user's ID in session
        return redirect('/');
    }
}

}

