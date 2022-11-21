<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
    $formFields=$request->validate([
        'emailAddress'=>['required','email']
,'password'=>'required'    ]);

if(auth()->attempt($formFields)){
    $request->session()->regenerate();

    return redirect('/');
}
return back()->withErrors(['emailAddress'=>'Invalid Credentials'])->onlyInput();
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/register');
    }
}
