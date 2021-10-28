<?php

namespace App\Http\Controllers\New;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class BackgroundController extends Controller
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
        $data= Background::all();
        return view('background.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('background.create');
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
            'image'         =>  'required|image'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/theme/images'), $new_name);
        $form_data = array(
            'image'  =>   $new_name,
            'title' =>$request->title ?? '',
            'description' =>$request->description ?? '',
            'linktitle' =>$request->linktitle ?? '',
            'link' =>$request->link ?? '',
            'video' =>$request->video ?? ''
        );

        Background::create($form_data);
        toast(__('Background data Added Successfully'),'success');


        return redirect()->route('background.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Background::findOrFail($id);
        return view('background.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Background::findOrFail($id);
        return view('background.edit', compact('data'));
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
                'image'         =>  'image'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            if ($id == 1) $image_name = 'slider-img1.jpg';
            if ($id == 2) $image_name = 'slider-img2.jpg';
            if ($id == 3) $image_name = 'slider-img3.jpg';
            if ($id == 4) $image_name = 'slider-img4.jpg';
            if ($id == 5) $image_name = 'slider-img5.jpg';
            if ($id == 6) $image_name = 'slider-img6.jpg';
            $image->move(public_path('theme/images'), $image_name);
        }
        else
        {
            $form_data = array(
                'image'            =>   $image_name,
                'title' =>$request->title ?? '',
                'description' =>$request->description ?? '',
                'linktitle' =>$request->linktitle ?? '',
                'link' =>$request->link ?? '',
                'video' =>$request->video ?? ''
            );
            Background::whereId($id)->update($form_data);
            toast(__('You never changed the photo'),'info');
            return redirect()->route('background.index');
        }
        $form_data = array(
            'image'            =>   $image_name,
            'title' =>$request->title ?? '',
            'description' =>$request->description ?? '',
            'linktitle' =>$request->linktitle ?? '',
            'link' =>$request->link ?? '',
            'video' =>$request->video ?? ''
        );

        Background::whereId($id)->update($form_data);
        toast(__('Background Image Updated Successfully'),'success');
        return redirect()->route('background.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id<6){
            toast(__('Background Image can Not be Deleted'),'warning');
            return redirect()->route('background.index');
        }
        $data = Background::findOrFail($id);
        $data->delete();
        toast(__('Background Image Deleted Successfully'),'info');
        return redirect()->route('background.index');
    }
}
