<?php

namespace App\Http\Controllers\New;

use App\BackgroundOther;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BackgroundOtherController extends Controller
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
        $data= BackgroundOther::all();
        return view('backgroundOther.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backgroundOther.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd('dsf');
        $request->validate([
            'type'    =>  'required',
            'title'     =>  'required',
            'vidio'     =>  'required',
            'subtitle'     =>  'required',
            'subbody'     =>  'required',
            'image'         =>  'required|image',
            'image1'         =>  'required|image',
            'image2'         =>  'required|image',
            'image3'         =>  'required|image',
        ]);
//dd('dsf');
        $image = $request->file('image');
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $new_name3 = rand() . '.' . $image3->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $image1->move(public_path('images'), $new_name1);
        $image2->move(public_path('images'), $new_name2);
        $image3->move(public_path('images'), $new_name3);
        $form_data = array(
            'type'       =>   $request->type,
            'title'        =>   $request->title,
            'body'        =>   $request->body,
            'vidio'        =>   $request->vidio,
            'subtitle'        =>   $request->subtitle,
            'subbody'        =>   $request->subbody,
            'image'            =>   $new_name,
            'image1'            =>   $new_name1,
            'image2'            =>   $new_name2,
            'image3'            =>   $new_name3,
        );

        BackgroundOther::create($form_data);
        toast(__('Background Other data Added Successfully'),'success');


        return redirect()->route('backgroundOther.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BackgroundOther::findOrFail($id);
        return view('backgroundOther.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = BackgroundOther::findOrFail($id);

        $data->delete();
        toast(__('Background Other Deleted Successfully'),'info');
        return redirect()->route('backgroundOther.index');
    }
}
