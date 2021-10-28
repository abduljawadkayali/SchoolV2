<?php

namespace App\Http\Controllers\New;

use App\HaberCard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaberCardController extends Controller
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
        $data= HaberCard::all();
        return view('haberCard.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('haberCard.create');
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
            'type'    =>  'required',
            'title'     =>  'required',
            'body'     =>  'required',
            'image'         =>  'required|image'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'type'       =>   $request->type,
            'title'        =>   $request->title,
            'body'        =>   $request->body,
            'image'            =>   $new_name
        );

        HaberCard::create($form_data);
        toast(__('Haber Card data Added Successfully'),'success');


        return redirect()->route('haberCard.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = HaberCard::findOrFail($id);
        return view('haberCard.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HaberCard::findOrFail($id);
        return view('haberCard.edit', compact('data'));
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
                'body'     =>  'required'
            ]);
        }
        if($request->type != '')
    {
        $form_data = array(
            'title'     =>  $request->title,
            'type'     =>  $request->type,
            'body'     =>  $request->body,
            'image'         =>  $image_name
        );
    }
        else{
            $form_data = array(
                'title'     =>  $request->title,
                'body'     =>  $request->body,
                'image'         =>  $image_name
            );
        }

        HaberCard::whereId($id)->update($form_data);
        toast(__('Haber Card Updated Successfully'),'success');
        return redirect()->route('haberCard.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HaberCard::findOrFail($id);

        $data->delete();
        toast(__('Haber card Deleted Successfully'),'info');
        return redirect()->route('haberCard.index');
    }
}
