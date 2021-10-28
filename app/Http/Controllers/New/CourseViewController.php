<?php

namespace App\Http\Controllers\New;

use App\CourseCategory;
use App\CourseView;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseViewController extends Controller
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
        $data= CourseView::all();
//        dd($data->course());
        return view('courseView.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= CourseCategory::all();
//        dd($data);
        return view('courseView.create', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->course_category_id);
        $request->validate([
            'title'     =>  'required',
            'teacher'     =>  'required',
            'course_category_id'     =>  'required|exists:course_categories,id',
            'image'         =>  'required|image'
        ]);
//        dd($request->course_category_id);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'type'       =>   $request->type,
            'title'        =>   $request->title,
            'teacher'        =>   $request->teacher,
            'price'        =>   $request->price ?$request->price: null,
            'course_category_id'        =>   $request->course_category_id,
            'body'        =>   $request->body,
            'image'            =>   $new_name
        );

        CourseView::create($form_data);
        toast(__('CourseView data Added Successfully'),'success');


        return redirect()->route('courseView.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CourseView::findOrFail($id);
        return view('courseView.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= CourseCategory::all();
        $data = CourseView::findOrFail($id);
        return view('courseView.edit', compact('data','category'));
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
                'body'    =>  'required',
                'course_category_id'     =>  'required|exists:course_categories,id',

                'teacher'     =>  'required',
                'title'     =>  'required',
                'image'         =>  'image'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
                'course_category_id'     =>  'required|exists:course_categories,id',

                'teacher'     =>  'required',
                'body'     =>  'required'
            ]);
        }
        if($request->type != '')
        {
            $form_data = array(
                'title'     =>  $request->title,
                'type'     =>  $request->type,
                'course_category_id'     =>  $request->course_category_id,
                'price'     =>  $request->price ? $request->price: null,
                'teacher'     =>  $request->teacher,
                'body'     =>  $request->body,
                'image'         =>  $image_name
            );
        }
        else{
            $form_data = array(
                'title'     =>  $request->title,
                'body'     =>  $request->body,
                'course_category_id'     =>  $request->course_category_id,
                'price'     =>  $request->price,
                'teacher'     =>  $request->teacher,
                'image'         =>  $image_name
            );
        }

        CourseView::whereId($id)->update($form_data);
        toast(__('CourseView Updated Successfully'),'success');
        return redirect()->route('courseView.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CourseView::findOrFail($id);

        $data->delete();
        toast(__('CourseView Deleted Successfully'),'info');
        return redirect()->route('courseView.index');
    }
}
