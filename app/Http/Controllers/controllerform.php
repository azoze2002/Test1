<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerform extends Controller
{

function form1() {
    return view('form.form1');

}

function form1_data(Request $request) {
    $name=$request->name;
    $age=$request->age;
    $email=$request->email;
    $phone=$request->phone;
    $pdfname=rand().time(). $request->file('pdf')->getClientOriginalName();
    $request->file('pdf')->move(public_path('uploads'),$pdfname);
    $request->validate([
        'name'=>['required','min:3','max:20'],
        'age'=>['required','gt:30'],
        'email'=>['required','ends_with:@gmail.com'],
        'phone'=>['required','min:9','max:9']
    ]);

    return view('form.form1_data',compact('name','age','email','phone'));

}




}
