<?php

namespace App\Http\Controllers\Student;


use App\Acount;
use Illuminate\Http\Request;
use App\StudentAdmin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Student;
use Auth;
use App\TeacherLesson;
class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_id = Auth::guard('students')->user()->id;

        $payment =  Acount::where(['student_id'=>$student_id,'fee'=>null])->get();
//        dd($student);
        $fee = Acount::where(['student_id'=>$student_id,'payment'=>null])->get();
        $PaymentSum = $payment->sum('payment');
        $feeSum = $fee->sum('fee');
//        dd($fee);
        return view('StudentAdmin.payment.index', compact('payment','PaymentSum','feeSum','fee'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

}
