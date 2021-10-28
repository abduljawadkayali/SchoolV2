<?php

namespace App\Http\Controllers\New;

use App\Category;
use App\CourseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function __construct() {
        $this->middleware('permission:NewDesigner');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= CourseCategory::all();
        return view('courseCategory.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courseCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    =>  'required'
        ]);
        $form_data = array(
            'name' =>$request->name,
        );

        CourseCategory::create($form_data);
        toast(__('CourseCategory data Added Successfully'),'success');


        return redirect()->route('courseCategory.index'); //
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
        $data = CourseCategory::findOrFail($id);
        return view('courseCategory.edit', compact('data'));
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
        //dd($request->body);
        $request->validate([
            'name'    =>  'required'
        ]);
        $form_data = array(
            'name' =>$request->name
        );

        CourseCategory::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('CourseCategory data Updated Successfully'),'success');
        return redirect()->route('courseCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CourseCategory::findOrFail($id);
        $data->delete();
        toast(__('CourseCategory data Deleted Successfully'),'info');
        return redirect()->route('courseCategory.index');
    }
}
