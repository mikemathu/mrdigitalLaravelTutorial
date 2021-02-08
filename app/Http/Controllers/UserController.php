<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\CreateUser;
use App\Http\Requests\UpdateUser;

use App\User;

class UserController extends Controller
{
    //


    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function showUsers(){

        $users = User::get();

       

       return view('home', compact('users'));
    }

    public function createUser(){
        return view('createuser');
    }

    public function saveUser(createUser $request){

        

      $user = new User;
      $user->fname = $request->fname;
      $user->lname = $request->lname;
      $user->email = $request->email;
      $user->password =Hash::make($request->password);
      $user->notes = $request->notes;

      $user->save();

      return redirect()->back()->with('success', 'User has been added successfully');

    }
    

    public function showUser(){

        $users= User::paginate(3);

        return view('users', compact('users'));
    }

    public function viewUser($id){

        $user= User::findOrFail($id);

        return view('viewusers', compact('user'));
    }

    public function updateUser(UpdateUser $request, $id){

        // $request->validate([

        //     'fname'=>'required',
        //     'lname'=>'required',
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ]);

        $user= User::findOrFail($id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->notes = $request->notes;

        $user->save();

        // return redirect()->back()->with('success', 'User has been updated successfully');

          return redirect('/admin/users')->with('success', 'User has been updated successfully');
    }

    public function deleteUser(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
}
