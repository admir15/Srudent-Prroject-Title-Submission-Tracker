<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'student_id' => 'required|string|max:50',
            'project_title' => 'required|string|max:255',
            'supervisor' => 'required|string|max:255',
        ]);

        Student::create([
            'student_name' => $request->student_name,
            'student_id' => $request->student_id,
            'project_title' => $request->project_title,
            'supervisor' => $request->supervisor,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }
}
