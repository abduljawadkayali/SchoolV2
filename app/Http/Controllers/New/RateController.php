<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Rate;
use Illuminate\Http\Request;
use Auth;
class RateController extends Controller
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
        $data= Rate::all();
        return view('rate.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Auth::user()->name);
        if(Auth::guard('students')->user()){
            $user_name = Auth::guard('students')->user()->name;
        }
        else if(Auth::guard('teachers')->user()){
            $user_name = Auth::guard('students')->user()->name;
        }
        else{
            $user_name = Auth::user()->name;
        }
        $request->validate([
            'title'     =>  'required',
            'description'     =>  'required',
            'category'     =>  'required',
            'star'     =>  'nullable'
        ]);
        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,
            'category'        =>   $request->category,
            'star'        =>   $request->star ? $request->star: 0,
            'user_name'        =>   $user_name
        );
        //dd($form_data);
        Rate::create($form_data);
        toast(__('Rate data Added Successfully'),'success');


        return redirect()->route('rate.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Rate::findOrFail($id);
        return view('rate.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rate::findOrFail($id);
        return view('rate.edit', compact('data'));
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
        //dd(Auth::user()->name);
        if(Auth::guard('students')->user()){
            $user_name = Auth::guard('students')->user()->name;
        }
        else if(Auth::guard('teachers')->user()){
            $user_name = Auth::guard('students')->user()->name;
        }
        else{
            $user_name = Auth::user()->name;
        }
        $request->validate([
            'title'     =>  'required',
            'description'     =>  'required',
            'category'     =>  'required',
            'star'     =>  'nullable'
        ]);
        $form_data = array(
            'title'       =>   $request->title,
            'description'        =>   $request->description,
            'category'        =>   $request->category,
            'star'        =>   $request->star ? $request->star: 0,
            'user_name'        =>   $user_name
        );
        Rate::whereId($id)->update($form_data);
        toast(__('Rate Updated Successfully'),'success');
        return redirect()->route('rate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rate::findOrFail($id);

        $data->delete();
        toast(__('Rate Deleted Successfully'),'info');
        return redirect()->route('rate.index');
    }
}
