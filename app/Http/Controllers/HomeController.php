<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() {

        // //record from table
        $students = Student::all();
        // dd($students);

        //WHERE
        // $students = Student::where('id', 1)->get();

        //FIRST
        // $students = Student::where('id', 1)->first();
        // dd($students);

        return view('welcome', compact('students'));
    }
}
