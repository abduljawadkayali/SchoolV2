<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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
        $data= Message::all();
        return view('message.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message.create');
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
            'email'     =>  'required',
            'message'     =>  'required',
        ]);
        $form_data = array(
            'name'       =>   $request->name,
            'email'       =>   $request->email,
            'message'       =>   $request->message,
        );
        Message::create($form_data);
        toast(__('Message data Added Successfully'),'success');


        return redirect()->route('message.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Message::findOrFail($id);
        return view('message.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Message::findOrFail($id);
        return view('message.edit', compact('data'));
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
            'email'     =>  'required',
            'message'     =>  'required',
        ]);
        $form_data = array(
            'name'       =>   $request->name,
            'email'       =>   $request->email,
            'message'       =>   $request->message,
        );
        Message::whereId($id)->update($form_data);
        toast(__('Message Updated Successfully'),'success');
        return redirect()->route('message.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Message::findOrFail($id);

        $data->delete();
        toast(__('Message Deleted Successfully'),'info');
        return redirect()->route('message.index');
    }
}
