<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Http\Controllers\Controller;
use App\Region;
use App\School;
use Illuminate\Http\Request;
use App\Student;
use App\Branch;
use App\Group;
use Hash;
use Illuminate\Support\Facades\DB;
class StudentsController extends Controller
{
    public function __construct() {
        $this->middleware('permission:Editor');

   }

   public function getGroups()
   {

       $schools = School::all();
      // $group = DB::table('groups')->pluck("name","id");
       $group = Group::all()->pluck("name","id");
$regions = Region::all();
$discounts = Discount::all();


      //dd($schools);
       return view('student.create',compact('regions','discounts','group','schools'));
   }

   public function getBranches($id)
   {
       $branc = DB::table("branch_group")->where("group_id",$id)->get()->pluck("branch_id");
       $items = array();
       foreach ($branc as $b) {
           $branches = DB::table("branches")->where("id",$b)->pluck("name", "id");
           $items[] = $branches;

       }


       return json_encode($items);
   }


    public function getStudents($id)
    {
        $students = Student::where('groub_id',$id)->get();


        return json_encode($students);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();//Get all Group

        $groups = Group::all()->pluck("name","id");
        return view('student.index', compact('students','groups' ))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request['branch']);
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'number'=>'required|unique:students',
            'group'=>'required|exists:groups,id',
            'branch'=>'required',
            'school_id'=>'required',
            'region'=>'nullable|exists:regions,id',
            'discount'=>'nullable|exists:discounts,id',


            ]
        );

        $name = $request['name'];
        $email = $request['email'];
        $password =  Hash::make($request['password']);
        $phone = $request['phone'];
        $number = $request['number'];
        $student = new Student();
        $student->name = $name;
        $student->email = $email;
        $student->password = $password;
        $student->phone = $phone;
        $student->number = $number;
        $student->group_id = $request['group'];
        $student->region_id = $request['region']?$request['region']:null;
        $student->discount_id = $request['discount']?$request['discount']:null;
        $student->branch_id = $request['branch'];
        $student->school_id = $request['school_id'];
        $student->save();




        return redirect()->action('StudentsController@index')->with('success', 'Student Added successfully');

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
        $student = Student::findOrFail($id);
        $group = Group::all();
        $schools = School::all();
        $regions = Region::all();
        $discounts = Discount::all();

        return view('student.edit', compact('regions','discounts','student', 'group','schools'));
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

//        dd($request->discount);

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'nullable',
            'phone'=>'required',
            'number' => 'required|unique:students,number,'.$student->id,
            'group'=>'required|exists:groups,id',
            'branch'=>'required',
            'discount'=>'required',
            'region'=>'required',
            'school_id'=>'required',



            ]
        );
if($request['password'] == null){
    $form_data = array(

        'name'   => $request->name,
        'email'   => $request->email,
        'phone'        =>   $request->phone,
        'number'            =>   $request->number,
        'group_id'            =>   $request->group,
        'branch_id'            =>   $request->branch,
        'discount_id'            =>   $request->discount,
        'region_id'            =>   $request->region,
        'school_id'            =>   $request->school_id,



    );
}
else{
    $form_data = array(

        'name'   => $request->name,
        'email'   => $request->email,
        'password'       =>   Hash::make($request['password']),
        'phone'        =>   $request->phone,
        'number'            =>   $request->number,
        'group_id'            =>   $request->group,
        'branch_id'            =>   $request->branch,
        'school_id'            =>   $request->school_id,
        'discount_id'            =>   $request->discount,
        'region_id'            =>   $request->region



    );
}


        Student::whereId($id)->update($form_data);

        return redirect()->action('StudentsController@index')->with('success', 'Student Updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')
            ->with('flash_message',
             'Student deleted!');
    }
}
