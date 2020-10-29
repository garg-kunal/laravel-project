<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    //
    public function index()
    {
        // return "Hello".$id
        $students=Students::all();
        return view('welcome',compact('students'));
    }
    public function create()
    {
        // return "Hello".$id
        return view('create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'phn' => 'required'
        ]);
        $student=new Students();
        $student->first_name=$request->first;
        $student->last_name=$request->last;
        $student->email=$request->email;
        $student->mobile_number=$request->phn;
        $student->save();
        return redirect(route('home'))->with("sucessMsg","Student Save Successfully");

    }
}
