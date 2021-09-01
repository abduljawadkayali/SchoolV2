<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\TeacherAdmin;
use App\Subject;
use App\Category;

use Auth;
use App\Group_branch_subject_teacher as TeacherRelation;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher_id = Auth::guard('teachers')->user()->id;
        $data = TeacherRelation::where('teacher_id',$teacher_id)->select('group_id')->with('group')->groupBy('group_id')->get()->pluck('group');
        foreach($data as $key=>$value){
            //dd($vdataalue->name);
         $data[$key]['route']= route('category.group',[$value->id]);
           //dd($data);
        }
        return view('TeacherAdmin.category.create', [
            'data'=>$data ,
            'header'=>'class',
        ]);
    }

    public function group($group_id)
    {
        $teacher_id = Auth::guard('teachers')->user()->id;
        $data = TeacherRelation::where('teacher_id',$teacher_id)->
        where('group_id',$group_id)->
        select('subject_id')->
        with('subject')->
        groupBy('subject_id')->
        get()->pluck('subject');

        foreach($data as $key=>$value){
          
            $data[$key]['route']= route('category.subjct',[$group_id , $value->id]);
              //dd($data);
           }
           return view('TeacherAdmin.category.create', [
            'data'=>$data ,
            'header'=>'Subject',
        ]);     
    }
    public function subjct($class_id, $subject_id)
    {
        
        return view('TeacherAdmin.category.create1', [
         
            'class_id'=>$class_id,
            'subject_id'=>$subject_id
        ]);
    }

    public function actoin($class_id,$subject_id)
    {
        $data = Category::where('class_id',$class_id)->
        where('subject_id',$subject_id)->
        get();
        //dd($data);
        return view('TeacherAdmin.category.index', [
            'data'=>$data,
            'class_id'=>$class_id,
            'subject_id'=>$subject_id,
        ]);
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
            'description'     =>  'required',
            'image'         =>  'required|image'

        ]);     
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
         

        $form_data = array(           
            'name'        =>   $request->name,
            'image'            =>   $new_name,
            'subject_id'        =>   $request->subject_id,
            'class_id'        =>   $request->class_id,
            'description'        =>   $request->description ,
            'book'        =>   $request->book 
        );
        Category::create($form_data);

        return redirect('Teacher/category/create')->with('success', 'Data Added successfully.');
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
        $category = Category::findOrFail($id);
        return view('TeacherAdmin.category.edit', compact('category'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'subject_id'     =>  'required',
                'class_id'     =>  'required',
                'name'     =>  'required',
                'description'     =>  'required',
                'image'         =>  'required|image'
    
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
                'description'     =>  'required'
    
            ]);   
        }

   
        $form_data = array(           
            'name'        =>   $request->name,
            'image'            =>   $image_name,
            'subject_id'        =>   $request->subject_id,
            'class_id'        =>   $request->class_id,
            'description'        =>   $request->description ,
            'book'        =>   $request->book 
        );
        Category::whereId($id)->update($form_data);
        return redirect('Teacher/category/create')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        
        $data->delete();
        return redirect()->back();
    }
}
