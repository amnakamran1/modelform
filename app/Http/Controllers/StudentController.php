<?php

namespace App\Http\Controllers;
use App\models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
class StudentController extends Controller
{
public function index(){
    $students = Student::all();
    return view('insert', compact('students'));
return view('insert');
}
   public function store(Request $request){

    $student = new Student;

    $student-> name= $request['name'];
     $student-> email= $request['email'];

    $student-> password=md5($request['password']);
    $student-> city=$request['city'];
    $student->save();
    return redirect()->back()->with('status', 'Student has been added successfully');


}
public function delete_record($id){
    Student::find($id)->delete();
    // return redirect()->back()->with('status', 'Student has been deleted successfully');
    return redirect('/insert/view');
}
public function edit($id)
{
    $student =  Student::find($id);
    if (is_null($student)) {
        # code...
        return redirect('/insert/view');
    } else {
        $title = "Update Data";
        $url = url('/insert/update') . "/" . $id;
        $data = compact('student', 'url', 'title');
        return view('edit_form')->with($data);
    }
}

public function update($id, Request $request)
{
    $student = student::find($id);
    $student->name = $request['name'];
    $student->email = $request['email'];
    $student->password = md5($request['password']);
    $student->city = $request['city'];
   
    $student->save();
    return redirect('insert'); 
}
}

