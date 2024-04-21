<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

        public function register(){
        return view('users.register');
    }

    public function createaccount(Request $req){
        
        $req->merge(['password'=>Hash::make($req->password)]);

        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect('/login');        

    }
    
    public function logininto(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        if(Auth::attempt(['email' => $req->$email, 'password' => $req->$password])){
         return redirect('/');
        }
         return redirect()->back()->with('error','Wrong!');        
         
     }
}