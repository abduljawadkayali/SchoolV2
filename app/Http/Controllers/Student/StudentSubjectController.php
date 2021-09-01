<?php

namespace App\Http\Controllers\Student;


use Illuminate\Http\Request;
use App\StudentAdmin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Student;
use Auth;
use App\TeacherLesson;
class StudentSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_group = Auth::guard('students')->user()->group_id;
        $data = Category::where('class_id',$student_group)->get();
      
        foreach($data as $key=>$value){
            //dd($vdataalue->name);
            $data[$key]['route']= route('lessons.group',[$value->subject_id]);
           //dd($data);
        }
        return view('StudentAdmin.lesson.index', [
            'data'=>$data ,
            'header'=>'Subjects',
        ]);
    }

    public function group($class)
    {
        
        $student_group = Auth::guard('students')->user()->group_id;
        $data = TeacherLesson::where('class_id',$student_group)->where('subject_id',$class)->get();
       
        foreach($data as $key=>$value){
            //dd($vdataalue->name);
            $data[$key]['route']= route('StudentSubject.show',[$value->id]);
           //dd($data);
        }
        return view('StudentAdmin.lesson.index1', [
            'data'=>$data ,
            'header'=>'lessons',
        ]); 
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
        $lesson = TeacherLesson::findOrFail($id);
        return view('StudentAdmin.lesson.view', compact('lesson'));
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
