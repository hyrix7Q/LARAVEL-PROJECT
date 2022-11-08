<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    //Show creating form
    public function create(){
        return view('addClient');
    }

    public function store(Request $request){
        $formFields=$request->validate([
             'fname'=>'required',
             'lname'=>'required',
             
        ]);

        // $prospect=new Prospect();
        // $prospect->fname=$request->fname;
        // $prospect->lname=$request->lname;
        // $prospect->save();
        Prospect::create($formFields);

        echo 'MRIGLAAAA';
        return redirect('/');
        
    }
}
