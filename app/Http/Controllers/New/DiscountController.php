<?php

namespace App\Http\Controllers\New;

use App\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
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
        $data= Discount::all();
        return view('disacount.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disacount.create');
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
            'disacount'    =>  'required|numeric|max:100'
        ]);
        $form_data = array(
            'name' =>$request->name,
            'disacount' =>$request->disacount,
        );

        Discount::create($form_data);
        toast(__('Discount data Added Successfully'),'success');


        return redirect()->route('disacount.index'); //
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
        $data = Discount::findOrFail($id);
        return view('disacount.edit', compact('data'));
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
        $request->validate([
            'name'    =>  'required',
            'disacount'    =>  'required|numeric|max:100',
        ]);
        $form_data = array(
            'name' =>$request->name,
            'disacount' =>$request->disacount
        );

        Discount::whereId($id)->update($form_data);
        //dd($form_data);
        toast(__('Discount data Updated Successfully'),'success');
        return redirect()->route('disacount.index');
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
        return redirect()->route('disacount.index');
        $data = Discount::findOrFail($id);
        $data->delete();
        toast(__('Discount data Deleted Successfully'),'info');
        return redirect()->route('disacount.index');
    }
}
