<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function __construct() {
        $this->middleware('permission:muhasib');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Region::all();
        return view('region.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.create');
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
            'name'    =>  'required',
            'price'    =>  'required'
        ]);
        $form_data = array(
            'name' =>$request->name,
            'price' =>$request->price,
        );

        Region::create($form_data);
        toast(__('Region data Added Successfully'),'success');


        return redirect()->route('region.index'); //
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
        $data = Region::findOrFail($id);
        return view('region.edit', compact('data'));
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
            'name'    =>  'required',
            'price'    =>  'required',
        ]);
        $form_data = array(
            'name' =>$request->name,
            'price' =>$request->price
        );

        Region::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('Region data Updated Successfully'),'success');
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        toast(__('الرجاء مراجعة قسم الصيانة'),'info');
        return redirect()->route('region.index');
        $data = Region::findOrFail($id);
        $data->delete();
        toast(__('Region data Deleted Successfully'),'info');
        return redirect()->route('region.index');
    }
}
