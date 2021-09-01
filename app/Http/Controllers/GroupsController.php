<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Branch;
 use App\Group_branch_subject_teacher;
use App\Group;
use App\Student;

class GroupsController extends Controller
{
    public function __construct() {
       

        $this->middleware('permission:Editor');
        
    
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();//Get all Group
        return view('group.index', ['groups'=> $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $subjects = Subject::all();//Get all permissions
        $branches = Branch::all();
        return view('group.create', ['subjects'=>$subjects, 'branches'=>$branches]);
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request, [
            'name'=>'required',
            'classNum'=>'required|unique:groups',
            
            ]
        );

        $name = $request['name'];
        $classNum = $request['classNum'];
        $group = new Group();
        $group->name = $name;
        $group->classNum = $classNum;
     
        $subjects = $request['subjects'];
        $branches = $request['branches'];
        
        //dd($subjects);

        $group->save();
      
        // dd( $subject);
    //Looping thru selected permissions
        foreach ($subjects as $subject) {
            $p = Subject::where('id', '=', $subject)->firstOrFail(); 
         //Fetch the newly created  and assign permission
          
            $group = Group::where('name', '=', $name)->first(); 
            $group->subjectes()->attach($subject);

        
           
        }
        foreach ($branches as $branch) {
            $b = Branch::where('id', '=', $branch)->firstOrFail(); 
         //Fetch the newly created  and assign permission
          
            $group = Group::where('name', '=', $name)->first(); 
            $group->branches()->attach($branch);

        
           
        }

        return redirect()->route('group.create')
            ->with('flash_message',
             'Class'. $group->name.' added!'); 
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect('groups');
       
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $subjects = Subject::all();
        $branches = Branch::all();

        return view('group.edit', compact('group', 'subjects', 'branches'));
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

       
        $this->validate($request, [
            'name'=>'required',
            'classNum'=>'required',
            
            ]
        );
        $form_data = array(
            'name'     =>  $request->name , 
            'classNum'     =>    $request->classNum
        );

        Group::whereId($id)->update($form_data);

     
        $subjects = $request['subjects'];
        $branches = $request['branches'];
        $name= $request['name'];
      
        // dd( $subject);
    //Looping thru selected permissions
        foreach ($subjects as $subject) {
            $p = Subject::where('id', '=', $subject)->firstOrFail(); 
         //Fetch the newly created  and assign permission
          
            $group = Group::where('name', '=', $name)->first(); 
            $group->subjectes()->attach($subject);

        
           
        }
        foreach ($branches as $branch) {
            $b = Branch::where('id', '=', $branch)->firstOrFail(); 
         //Fetch the newly created  and assign permission
          
            $group = Group::where('name', '=', $name)->first(); 
            $group->branches()->attach($branch);

        
           
        }
            return redirect()->route('group.index')
                ->with('flash_message',
                 'Class'. $group->name.' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        $relation = Group_branch_subject_teacher::where('group_id', $id);
        $relation->delete();
        $student = Student::where('group_id', $id);
        $student->delete();
        return redirect()->route('group.index')
            ->with('flash_message',
             'Class deleted!');
    }
}
