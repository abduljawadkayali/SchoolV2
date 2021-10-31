<?php

namespace App\Http\Controllers\New;

use App\Acount;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class AcountController extends Controller
{
    public function __construct() {
        $this->middleware('permission:muhasib');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Acount::where('fee',null)->get();
//        dd($data);
        return view('acount.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->student_number == null){
            toast(__('Please Enter Student Number'),'info');
            return redirect()->route('acount.index'); //
        }
        $request->validate([
            'student_number'    =>  'required',
            'payment'    =>  'nullable|numeric',
            'fee'    =>  'nullable|numeric'
        ]);
        $student = Student::where('number',$request->student_number)->first();
        //dd($student);

        if ($student->id == null){
            toast(__('Please Select availble Student'),'info');
            return redirect()->route('acount.index'); //
        }
        if ($request->payment == null && $request->fee == null  ){
            toast(__('Please Enter the Money'),'info');
            return redirect()->route('acount.index'); //
        }
        $form_data = array(
            'student_id' =>$student->id,
            'payment' =>$request->payment?$request->payment: null,
            'fee' =>$request->fee?$request->fee: null,
        );
        $student->status = 1;
        $student->save();
//        dd($student);

        Acount::create($form_data);
        toast(__('Acount data Added Successfully'),'success');


        return redirect()->route('acount.index'); //
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
        $data = Acount::findOrFail($id);
        return view('acount.edit', compact('data'));
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
        dd($request);
        if ($request->student_number == null){
            toast(__('Please Enter Student Number'),'info');
            return redirect()->route('acount.index'); //
        }
        $request->validate([
            'student_number'    =>  'required',
            'payment'    =>  'nullable|numeric',
            'fee'    =>  'nullable|numeric'
        ]);
        $student = Student::where('number',$request->student_number)->first();
        dd($student);
        if ($student->id == null){
            toast(__('Please Select availble Student'),'info');
            return redirect()->route('acount.index'); //
        }
        if ($request->payment == null && $request->fee == null  ){
            toast(__('Please Enter the Money'),'info');
            return redirect()->route('acount.index'); //
        }
        $form_data = array(
            'student_id' =>$student->id,
            'payment' =>$request->payment?$request->payment: null,
            'fee' =>$request->fee?$request->fee: null,
        );

        Acount::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('Acount data Updated Successfully'),'success');
        return redirect()->route('acount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Acount::findOrFail($id);
        $data->delete();
        toast(__('Acount data Deleted Successfully'),'info');
        return redirect()->route('acount.index');
    }
}
