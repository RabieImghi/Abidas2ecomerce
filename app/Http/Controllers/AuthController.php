<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function login(){
        return view("Auth.login");
    }
    public function Register(){
        return view("Auth.register");
    }
    public function ForgetPassword(){
        return view("Auth.reset");
    }
    public function User_Register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = Hash::make($validateData['password']); 
        $user->credit_card = ""; 
        $user->address = ""; 
        $user->role_id  = 1; 
        $user->save();
        return redirect('/login');
        
    }
}
