<?php

namespace App\Http\Controllers\Student;


use Illuminate\Http\Request;
use App\StudentAdmin;
use App\Http\Controllers\Controller;
use Hash;
use Auth;

use App\Student;
class StudentPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_id = Auth::guard('students')->user()->id;
        $student = Student::findOrFail($student_id);


        return view('StudentAdmin.personal.create', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',     
            'number' => 'required|unique:students,number,'.$student->id,
            'branch'=>'required',
            
            
            
            ]
        );

        $form_data = array(

            'name'   => $request->name,
            'email'   => $request->email,
            'password'       =>   Hash::make($request['password']),
            'phone'        =>   $request->phone,           
            'number'            =>   $request->number,
            'group_id'            =>   $student->group_id,
            'branch_id'            =>   $student->branch_id,
      


        );

        Student::whereId($id)->update($form_data);
    
       

        return redirect()->route('studentPersonal.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
