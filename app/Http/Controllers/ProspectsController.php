<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    //Show creating form
    public function create(){
        return view('addProspect');
    }

    public function show(){
        return view('seeProspects',['prospects'=>Prospect::latest()->paginate(2)]);
    }

    public function store(Request $request){

        $formFields=$request->validate([
             'firstName'=>'required',
             'secondName'=>'required',
             'company'=>'required',
             'emailAddress'=>['required','email'],
             'phoneNumber'=>'required',
             'address'=>'required',
             'website'=>'required',
             'source'=>'required'
             
        ]);

        // $prospect=new Prospect();
        // $prospect->fname=$request->fname;
        // $prospect->lname=$request->lname;
        // $prospect->save();
        Prospect::create($formFields);

        return redirect('/');
        
    }

    public function edit(Prospect $prospect){
        dd($prospect);
       return view('editProspect',['prospect'=>$prospect]);
    }

    public function update(Request $request,Prospect $prospect){
        $formFields=$request->validate([
             'firstName'=>'required',
             'secondName'=>'required',
             'company'=>'required',
             'emailAddress'=>['required','email'],
             'phoneNumber'=>'required',
             'address'=>'required',
             'website'=>'required',
             'source'=>'required'
             
        ]);

        // $prospect=new Prospect();
        // $prospect->fname=$request->fname;
        // $prospect->lname=$request->lname;
        // $prospect->save();
        $prospect->update($formFields);

        return redirect('/');
        
    }

    public function delete(Prospect $prospect){
     $prospect->delete();
     return redirect('/');
    }
}
