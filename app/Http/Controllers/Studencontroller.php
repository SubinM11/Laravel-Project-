<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Studencontroller extends Controller{



    public function create(){
        return view('create');
    }

    public function createpost(Request $request){
    
        $validateData =$request->validate([
           'name'=>'required',
           'email'=>'required'
        ]);
         $student = student::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'mobile'=>$request->mobile,
           'password'=>$request->password
         ]);
         return redirect('index');
}

    public function index(){
      $students=student::get();
      return view('index')->with(['store'=>$students]);
    }

    public function edit($id){
             
            $students= student::find($id);
              return view('update')->with(['stude'=>$students]);
             
    }

    public function update(Request $request){
        
      $students=student::find($request->id);
        $students->name=$request->name;
        $students->email=$request->email;
        $students->mobile=$request->mobile;
        $students->password=$request->password;
        $students->save();
         return redirect('index');
      


    }
    public function delete($id){
             
      $students= student::find($id);
      $students->delete();
        return redirect('index')->with('sucess', 'Deleted Successful....');
       
}

}