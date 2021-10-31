<?php

namespace App\Http\Controllers\New;

use App\Acount;
use App\Discount;
use App\Group;
use App\Http\Controllers\Controller;
use App\Region;
use App\Student;
use Illuminate\Http\Request;

class LockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lock.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
//        $groups = Group::all();
//        foreach ($groups as $group){
//            $group->fee = 150;
//            $group->save();
//        }
//
//        dd($groups);
//
//        foreach ($students as $student){
//            $student->discount_id = 1;
//            $student->region_id = 6;
//            $student->save();
//            $region = Region::where('id',3)->get();
//            dd($region);
//        }
//        dd('stop');

        foreach ($students as $student){
            $fee =0;
            if ($student->group->fee != null){
                if ($student->region_id == null){
                    if($student->discount_id == null){

                         $fee =  $student->group->fee ;

                    }else{
                        $disacount = Discount::where('id',$student->discount_id)->pluck('disacount')->first();
                        $fee = ((100 - (int)($disacount))/100)*$student->group->fee;

                    }
                }
                else if($student->discount_id == null){

                    $region = Region::where('id',$student->region_id)->pluck('price')->first();
                    $fee =  $student->group->fee + (int)$region;

                }
                else{
                    $region = Region::where('id',$student->region_id)->pluck('price')->first();
                    $disacount = Discount::where('id',$student->discount_id)->pluck('disacount')->first();
                    $fee = ((100 - (int)($disacount))/100)*$student->group->fee + (int)$region;
                }
//                dd($fee);
                $form_data = array(
                    'student_id' =>$student->id,
                    'fee' =>$fee,
                );
                Acount::create($form_data);
                $student->status = 0;
                $student->save();
            }
            else{
                toast(__('الرجاء اضافة الرسوم للصف  ' .$student->group->name),'info');
                return redirect()->route('lock.index');

            }
        }
//        dd($students);
        toast(__('تم تحديث البيانات بنجاح'),'info');
        return redirect()->route('lock.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = Student::all();
        $percent = (int)$request->percent;
        //if($percent == 0 ){
        //    toast(__('الرجاء ادخال قيمة حقيقية' ),'info');
        //    return redirect()->route('lock.index');
        //}
        //dd($percent);
        foreach ($students as $student){
            $payement = Acount::where(['student_id'=> $student->id , 'fee'=> null])->get();
            $fee = Acount::where(['student_id'=> $student->id , 'payment'=> null])->get();
            $payement = $payement->sum('payment');
            $fee = $fee->sum('fee');
            if($payement < (0.1 * $percent * $fee)){
                $student->status = 0;
                $student->save();
            }
            else{
                $student->status = 1;
                $student->save();
            }
        }
        toast(__('تم تحديث البيانات بنجاح'),'info');
        return redirect()->route('lock.index');
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
