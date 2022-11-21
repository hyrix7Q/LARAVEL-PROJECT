<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommercialController extends Controller
{

    public function show(){
        return view('seeCommercials',['commercials'=>User::latest()->filter()->get()]);
    }
    public function create(){
     return view('addCommercial');   
    }

    public function store(Request $request){
        $formFields=$request->validate([
            'firstName'=>'required',
            'secondName'=>'required',
            'emailAddress'=>['required','email'],
            'phoneNumber'=>'required',
            'password'=>'required'
       ]);
       $formFields['password']=bcrypt($formFields['password']);
       $formFields['role']='Commercial';

       User::create($formFields);

       return redirect('/');
    }

    public function edit(User $commercial){
        return view('editCommercial',['commercial'=>$commercial]);
     }

     
    public function update(Request $request,User $commercial){
        $formFields=$request->validate([
            'firstName'=>'required',
            'secondName'=>'required',
            'emailAddress'=>['required','email'],
            'password'=>'required'
             
        ]);

        // $user=new user();
        // $user->fname=$request->fname;
        // $user->lname=$request->lname;
        // $user->save();
        $commercial->update($formFields);

        return redirect('/');
        
    }
    public function delete(User $commercial){
        $commercial->delete();
        return redirect('/');
       }

}
