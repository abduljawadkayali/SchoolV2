<?php

namespace App\Http\Controllers\New;

use App\Employe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeController extends Controller
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
        $data= Employe::all();
        return view('employe.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employe.create');
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
            'date'     =>  'required',
            'title'     =>  'required',
            'description'     =>  'nullable',
            'about'     =>  'nullable',
            'years'     =>  'nullable',
            'page'     =>  'required',
            'mail'     =>  'nullable',
            'whatsup'     =>  'nullable',
            'facebook'     =>  'nullable',
            'image'         =>  'required|image'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'date'       =>   $request->date,
            'title'       =>   $request->title,
            'description'       =>   $request->description ?$request->description :'',
            'about'       =>   $request->about ?$request->about:'',
            'years'        =>   $request->years? $request->years:'',
            'page'        =>   $request->page,
            'mail'        =>   $request->mail?$request->mail:'',
            'whatsup'        =>   $request->whatsup ?$request->whatsup:'',
            'facebook'        =>   $request->facebook ? $request->facebook : '',
            'image'            =>   $new_name
        );
//dd($form_data);
        Employe::create($form_data);
        toast(__('Employe data Added Successfully'),'success');


        return redirect()->route('employe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employe::findOrFail($id);
        return view('employe.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employe::findOrFail($id);
        return view('employe.edit', compact('data'));
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
       // dd($request);
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        $request->validate([
            'name'    =>  'required',
            'date'     =>  'required',
            'title'     =>  'required',
            'description'     =>  'nullable',
            'about'     =>  'nullable',
            'years'     =>  'nullable',
            'page'     =>  'required',
            'mail'     =>  'nullable',
            'whatsup'     =>  'nullable',
            'facebook'     =>  'nullable',
            'image'         =>  'nullable|image'
        ]);
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        $form_data = array(
            'name'       =>   $request->name,
            'date'       =>   $request->date,
            'title'       =>   $request->title,
            'description'       =>   $request->description ?$request->description :'',
            'about'       =>   $request->about ?$request->about:'',
            'years'        =>   $request->years? $request->years:'',
            'page'        =>   $request->page,
            'mail'        =>   $request->mail?$request->mail:'',
            'whatsup'        =>   $request->whatsup ?$request->whatsup:'',
            'facebook'        =>   $request->facebook ? $request->facebook : '',
            'image'            =>   $image_name
        );
        Employe::whereId($id)->update($form_data);
        toast(__('Employe Updated Successfully'),'success');
        return redirect()->route('employe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employe::findOrFail($id);

        $data->delete();
        toast(__('Employe Deleted Successfully'),'info');
        return redirect()->route('employe.index');
    }
}
