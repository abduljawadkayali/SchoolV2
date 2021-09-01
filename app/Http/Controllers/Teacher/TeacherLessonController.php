<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\TeacherAdmin;
use App\Subject;
use App\TeacherLesson;
use Auth;
use App\Group_branch_subject_teacher as TeacherRelation;
class TeacherLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher_id = Auth::guard('teachers')->user()->id;
        $data = TeacherRelation::where('teacher_id',$teacher_id)->select('group_id')->with('group')->groupBy('group_id')->get()->pluck('group');
        foreach($data as $key=>$value){
            //dd($vdataalue->name);
            $data[$key]['route']= route('lesson.class',[$value->id]);
           //dd($data);
        }
        return view('TeacherAdmin.lesson.index', [
            'data'=>$data ,
            'header'=>'class',
        ]);
    }

    public function class($group_id)
    {
        $teacher_id = Auth::guard('teachers')->user()->id;
        $data = TeacherRelation::where('teacher_id',$teacher_id)->
        where('group_id',$group_id)->
        select('subject_id')->
        with('subject')->
        groupBy('subject_id')->
        get()->pluck('subject');

        foreach($data as $key=>$value){
          
            $data[$key]['route']= route('lesson.subject',[$group_id , $value->id]);
              //dd($data);
           }
           return view('TeacherAdmin.lesson.index', [
            'data'=>$data ,
            'header'=>'Subject',
        ]);     
    }
    public function subject($class_id, $subject_id)
    {
        
        return view('TeacherAdmin.lesson.create', [
         
            'class_id'=>$class_id,
            'subject_id'=>$subject_id
        ]);
    }

    public function action($class_id,$subject_id)
    {
        $data = TeacherLesson::where('class_id',$class_id)->
        where('subject_id',$subject_id)->
        get();
        //dd($data);
        return view('TeacherAdmin.lesson.show', [
            'data'=>$data,
            'class_id'=>$class_id,
            'subject_id'=>$subject_id,
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
        $user_id = Auth::guard('teachers')->user()->id;
        $request->validate([
            'subject_id'     =>  'required',
            'class_id'     =>  'required',
            'name'     =>  'required',
            'body'     =>  'required',
            'image'         =>  'required|image',


        ]);     
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
         

        $form_data = array(           
            'name'        =>   $request->name,
            'image'            =>   $new_name,
            'subject_id'        =>   $request->subject_id,
            'class_id'        =>   $request->class_id,
            'body'        =>   $request->body ,
            'ftitle'        =>   $request->ftitle ,
            'ftext'        =>   $request->ftext ,
            'stitle'        =>   $request->stitle ,
            'stext'        =>   $request->stext ,
            'fVtitle'        =>   $request->fVtitle ,
            'fVurl'        =>   $request->fVurl ,
            'fVtext'        =>   $request->fVtext ,
            'thtitle'        =>   $request->thtitle ,
            'thtext'        =>   $request->thtext ,
            'fourthtitle'        =>   $request->fourthtitle ,
            'fourthtext'        =>   $request->fourthtext ,
            'fifthtitle'        =>   $request->fifthtitle ,
            'fifthtext'        =>   $request->fifthtext ,
            'sVtitle'        =>   $request->sVtitle ,
            'sVurl'        =>   $request->sVurl ,
            'sVtext'        =>   $request->sVtext ,
            'sixthtitle'        =>   $request->sixthtitle ,
            'sixthtext'        =>   $request->sixthtext ,
            'seventhtitle'        =>   $request->seventhtitle ,
            'seventhtext'        =>   $request->seventhtext ,
            'tVtitle'        =>   $request->tVtitle ,
            'tVurl'        =>   $request->tVurl ,
            'tVtext'        =>   $request->tVtext ,
            'fLtitle'        =>   $request->fLtitle ,
            'fLurl'        =>   $request->fLurl ,
            'sLtitle'        =>   $request->sLtitle ,
            'sLurl'        =>   $request->sLurl ,
            'tLtitle'        =>   $request->tLtitle ,
            'tLurl'        =>   $request->tLurl ,
            'fourthLurl'        =>   $request->fourthLurl ,
            'fifthLtitle'        =>   $request->fifthLtitle ,
            'fifthLurl'        =>   $request->fifthLurl 
        );
        TeacherLesson::create($form_data);

        return redirect('Teacher/TeacherLesson')->with('success', 'Data Added successfully.');
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
        return view('TeacherAdmin.lesson.view', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = TeacherLesson::findOrFail($id);
        return view('TeacherAdmin.lesson.edit', compact('lesson'));
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
        

      //  dd($request->hidden_image);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
          
            $request->validate([
                'subject_id'     =>  'required',
                'class_id'     =>  'required',
                'name'     =>  'required',
                'body'     =>  'required'
    
            ]);  

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            
            $request->validate([
                'subject_id'     =>  'required',
                'class_id'     =>  'required',
                'name'     =>  'required',
                'body'     =>  'required'
    
            ]);  
        }

   
        $form_data = array(           
            'name'        =>   $request->name,
            'image'            =>   $image_name,
            'subject_id'        =>   $request->subject_id,
            'class_id'        =>   $request->class_id,
            'body'        =>   $request->body ,
            'ftitle'        =>   $request->ftitle ,
            'ftext'        =>   $request->ftext ,
            'stitle'        =>   $request->stitle ,
            'stext'        =>   $request->stext ,
            'fVtitle'        =>   $request->fVtitle ,
            'fVurl'        =>   $request->fVurl ,
            'fVtext'        =>   $request->fVtext ,
            'thtitle'        =>   $request->thtitle ,
            'thtext'        =>   $request->thtext ,
            'fourthtitle'        =>   $request->fourthtitle ,
            'fourthtext'        =>   $request->fourthtext ,
            'fifthtitle'        =>   $request->fifthtitle ,
            'fifthtext'        =>   $request->fifthtext ,
            'sVtitle'        =>   $request->sVtitle ,
            'sVurl'        =>   $request->sVurl ,
            'sVtext'        =>   $request->sVtext ,
            'sixthtitle'        =>   $request->sixthtitle ,
            'sixthtext'        =>   $request->sixthtext ,
            'seventhtitle'        =>   $request->seventhtitle ,
            'seventhtext'        =>   $request->seventhtext ,
            'tVtitle'        =>   $request->tVtitle ,
            'tVurl'        =>   $request->tVurl ,
            'tVtext'        =>   $request->tVtext ,
            'fLtitle'        =>   $request->fLtitle ,
            'fLurl'        =>   $request->fLurl ,
            'sLtitle'        =>   $request->sLtitle ,
            'sLurl'        =>   $request->sLurl ,
            'tLtitle'        =>   $request->tLtitle ,
            'tLurl'        =>   $request->tLurl ,
            'fourthLurl'        =>   $request->fourthLurl ,
            'fourthLtitle'        =>   $request->fourthLtitle ,
            'fifthLtitle'        =>   $request->fifthLtitle ,
            'fifthLurl'        =>   $request->fifthLurl 
        );
        TeacherLesson::whereId($id)->update($form_data);
        return redirect('Teacher/TeacherLesson')->with('success', 'Data Updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TeacherLesson::findOrFail($id);
        
        $data->delete();
        return redirect()->back();
    }
}
