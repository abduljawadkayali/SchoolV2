<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Icon;
class IconController extends Controller
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
        $data= Icon::all();
        return view('icon.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = array(
            'title' =>$request->title ?? '',
            'icon' =>$request->icon ?? '',
            'link' =>$request->link ?? ''
        );

        Icon::create($form_data);
        toast(__('Icon data Added Successfully'),'success');


        return redirect()->route('icon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Icon::findOrFail($id);
        return view('icon.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Icon::findOrFail($id);
        return view('icon.edit', compact('data'));
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
        $form_data = array(
            'title' =>$request->title ?? '',
            'icon' =>$request->icon ?? '',
            'link' =>$request->link ?? ''
        );

        Icon::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('Icon data Updated Successfully'),'success');
        return redirect()->route('icon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Icon::findOrFail($id);
        $data->delete();
        toast(__('Icon data Deleted Successfully'),'info');
        return redirect()->route('icon.index');
    }
}
