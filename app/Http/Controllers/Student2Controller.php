<?php

namespace App\Http\Controllers;

use App\Models\Student2;
use Illuminate\Http\Request;

class Student2Controller extends Controller
{
    public function index()
    {
        $students=Student2::orderBy('id','DESC')->get();
        return view('ajax.students',compact('students'));
    }

    public function addStudent(Request $request){
        $student=new Student2();
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return response()->json($student);
    }

    public function getStudentById($id)
    {
        $student=Student2::find($id);
        response()->json($student);
    }

    public function updateStudent(Request $request)
    {
        $student=Student2::find($request->id);
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return response()->json($student);
    }

    public function deleteStudent($id)
    {
        $student=Student2::find($id);
        $student->delete();
        return response()->json(['success'=>"malumot o'chirildi"]);
    }

    public function deleteCheckedStudents(Request $request)
    {
        $massiv=$request->massiv;
        Student2::whereIn('id',$massiv)->delete();
        return response()->json(['success'=>"Tanlangan malumotlar o'chirildi"]);
    }

}
