<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
public  function store(Request $request)
{
   $studen = new student();
   $studen->email= $request->email;
  
   $studen->save();
   return "seuccess";

}




public function index(){
   $students = student::all();
   
   return view('welcome',compact('students'));
}

public  function edit($student_id)
{
   $student_s = student::find($student_id);
   return view('edit', compact('student_s'));

}


























}
