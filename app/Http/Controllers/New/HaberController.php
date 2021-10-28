<?php

namespace App\Http\Controllers\New;

use App\Haber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaberController extends Controller
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
        $data= Haber::all();
        toast(__('يتم عرض أخر  10 منشورات مضافة في هذه الصفحة على الصفحة الرئيسية '),'success');
        return view('haber.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('haber.create');
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
            'body'    =>  'required'
        ]);
        $form_data = array(
            'body' =>$request->body,
        );

        Haber::create($form_data);
        toast(__('Haber data Added Successfully'),'success');


        return redirect()->route('haber.index'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Haber::findOrFail($id);
        return view('haber.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Haber::findOrFail($id);
        return view('haber.edit', compact('data'));
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
            'body'    =>  'required'
        ]);
        $form_data = array(
            'body' =>$request->body
        );

        Haber::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('Haber data Updated Successfully'),'success');
        return redirect()->route('haber.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Haber::findOrFail($id);
        $data->delete();
        toast(__('Haber data Deleted Successfully'),'info');
        return redirect()->route('haber.index');
    }
}
