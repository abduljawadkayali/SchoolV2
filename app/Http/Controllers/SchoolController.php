<?php

namespace App\Http\Controllers;

use App\School;
use App\Student;
use Illuminate\Http\Request;

class SchoolController extends Controller
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
        $schools= School::all();//Get all Group


        return view('school.index')->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create');
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
            'name'=>'required|max:120'

        ]);
        $form_data = array(
            'name'        =>   $request->name

        );
        School::create($form_data);
        return redirect()->action('SchoolController@index')->with('success', 'Data Added successfully');
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
        $school = School::findOrFail($id);

        return view('school.edit', compact('school')); //pass user and roles data to view
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
            'name'=>'required|max:120'

        ]);
        $form_data = array(
            'name'        =>   $request->name

        );
        School::whereId($id)->update($form_data);
        return redirect()->action('SchoolController@index')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id ==1)
        {
            return redirect()->action('SchoolController@index')->with('danger', 'You can not delete this information');
        }
        $data = School::findOrFail($id);

        $data->delete();
        return redirect()->action('SchoolController@index')->with('success', 'School deleted successfully');
    }
}
