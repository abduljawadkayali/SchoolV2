<?php

namespace App\Http\Controllers\New;

use App\Acount;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('statment.index');
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
        $student =Student::where('number',$request->student_number)->first();
        if ($student == null){
            return;
        }
        $payment =  Acount::where(['student_id'=>$student->id,'fee'=>null])->get();
//        dd($student);
        $fee = Acount::where(['student_id'=>$student->id,'payment'=>null])->get();
        $PaymentSum = $payment->sum('payment');
        $feeSum = $fee->sum('fee');
//        dd($fee);
        return view('statment.view', compact('payment','PaymentSum','feeSum','fee'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
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
