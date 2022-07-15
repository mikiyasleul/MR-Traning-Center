<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /*
    public function create(Request $request)
        {
           $firstname= $request->input('firstname');
            // dd($firstname);                
        }
    */
    protected function validator(Request $request)
        {
            return Validator::make($request, [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'addres' => ['required', 'string', 'max:10'],
                'age' => ['required', 'integer', 'max:50'],
                'courcetype' => [ 'string', 'max:50'], 
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'coursetime' => ['integer', 'max:50'],
                'phonenumber' => ['required', 'string', 'max:255'],
                'previousCourse' => [ 'string'], 
                'sex' => ['required', 'string', 'max:255'], 
                'day' => ['required', 'string', 'max:255'],          
            ]);
        }
        
    protected function Create(Request $request)
        {
             Student::create([
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'addres' => $request['addres'],
                'age' => $request['age'],
                'courcetype' => $request['courcetype'],
                'email' => $request['email'],
                'coursetime' => $request['coursetime'],
                'phonenumber' => $request['phonenumber'],
                'sex' => $request['sex'],
                'day' => $request['day'],
                'previousCourse' => $request['previousCourse'],
                
            ]);
            return redirect()->back()->with('success','Student succesfully registerd !');
        }

    
}
