<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Student::orderBy('name')->get();
        return view('student.index',compact('students'));
    }
    
    public function create()
    {
        return view('student.create', [
            'student'=> new Student()
        ]);
    }
       
    public function store(StudentRequest $request)
    {
        $fields = $request->only('name','code','avatar');
        $fields['name'] = strtoupper($fields['name']);
        if($request->file('avatar'))
        {
            $avatar = $request->file('avatar');
            $new_name = rand() . '.' . $avatar->getClientOriginalExtension();
            $request->avatar->storeAs('students', $new_name);
            $fields['avatar'] = $new_name;
        }
        else
        {
            $fields['avatar'] = "student-default.png";
        }
        (new Student($fields))->save();
        
        return redirect()
                        ->route('students.index')
                        ->with('success', 'Aluno cadastrado com sucesso');
    }
}