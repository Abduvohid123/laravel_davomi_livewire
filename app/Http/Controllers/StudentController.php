<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('student.add');
    }

    public function storeStudent(Request $request)
    {
        $name=$request->name;
        $image=$request->file('file');
        $image_name=time().'.'.$image->extension();
        $image->move(public_path('images'),$image_name);

        $student= new Student();
        $student->name=$name;
        $student->image=$image_name;
        $student->save();
        return back()->with('ok','yangi student qo\'shildi');
    }

    public function all_student()
    {
        $students=Student::all();
        return view('student.all',compact('students'));
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request)
    {
        $image=$request->file('file');
        $image_name=time().'.'.$image->extension();
        $image->move(public_path('images'),$image_name);
        $student=Student::find($request->id);
        $student->name=$request->name;
        $student->image=$image_name;
        $student->save();
        return back()->with('update','Malumot yangilandi');

    }

    public function delete($id)
    {
        $student=Student::find($id);

        unlink(public_path('images').'/'.$student->image);
        $student->delete();
        return back()->with('delete','Malumot o\'chirildi');
    }
}
