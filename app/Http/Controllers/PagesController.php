<?php

namespace App\Http\Controllers;

use App\Background;
use App\Employe;
use App\Gallery;
use App\HaberCard;
use App\Icon;
use App\Message;
use Illuminate\Http\Request;
use App\Crud;
use App\Post;
use App\Staff;
use App\Haber;
use App\Rate;
class PagesController extends Controller
{
    public function message(Request $request){

        if( $request->name == null||$request->email == null||$request->message == null ){
            return('الرجاء ادخال البيانات المطلوبة...');
        }
        else{
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
            return('لقد استقبلنا رسالتكم بنجاح شكرا لكم ...');
        }

        //dd($validation);



    }
    public function welcome()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');
        //dd($GalleryFirst);
        return view('pages.welcome', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }
    public function contact()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');
        //dd($GalleryFirst);
        return view('pages.contact', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }
    public function blog()
    {

        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.blog', compact( 'habers'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function hr()
    {

        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.hr', compact( 'habers'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function finans()
    {

        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.finans', compact( 'habers'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function work()
    {

        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.work', compact( 'habers'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function ted()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');
         //dd($GalleryFirst);
        return view('pages.ted', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }
    public function display($id)
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $data = HaberCard::findOrFail($id);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات')->get();
        return view('pages.haber', compact('data','habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'));
    }

    public function displayEmployee($id)
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $data = Employe::findOrFail($id);
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات')->get();
        return view('pages.employee', compact('data','haberCards1','haberCards2','haberCards3',
            'haberCards4','haberCards5',
            'habers','mangement','Tedmangement',
            'BabeMangement','PreMangement','FirstMangement','SecondMangement','ThirdMangement','OnlineMangement'));
    }

    public function home(){

        return view('home');
    }

    public function kg()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.kg', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function prekg()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.prekg', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function firstschool()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.firstschool', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function secschool()
    {
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.secschool', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);



    }

    public function highschool()
    {        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.highschool', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);




    }



    public function login(){
        return view('pages.tstt');
    }

    public function mangement(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.mangement', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);



    }


    public function kgmang(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.kgmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function prekgmang(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.prekgmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function firstmang(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.firstmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function secondmang(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.secondmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function highmang(){
        $backgrounds = Background::all();
        $icons = Icon::all();
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $parentsRate = Rate::where('category','parents')->get();
        $teachersRate = Rate::where('category','teacher')->get();
        $studentsRate = Rate::where('category','student')->get();
        $mangement = Employe::where('page','mangement')->get();
        $Tedmangement = Employe::where('page','Tedmangement')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.highmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function news()
    {

        $data = Crud::where('web_page', '6')->paginate(50);
        $dataText = Post::where('page', '6')->paginate(50);
        return view('pages.news', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function club()
    {

        $data = Crud::where('web_page', '7')->paginate(50);
        $dataText = Post::where('page', '7')->paginate(50);

        return view('pages.club', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function bus()
    {

        $data = Crud::where('web_page', '8')->paginate(50);
        $dataText = Post::where('page', '8')->paginate(50);
        return view('pages.bus', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function service()
    {

        $data = Crud::where('web_page', '10')->paginate(50);
        $dataText = Post::where('page', '10')->paginate(50);
        return view('pages.service', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function interviewofice()
    {

        $data = Crud::where('web_page', '9')->paginate(50);
        $dataText = Post::where('page', '9')->paginate(50);
        return view('pages.interviewofice', compact('data', 'dataText'))
                ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function conectus(){
        return view('pages.conectus');
    }

    public function test(){
        return view('pages.test');
    }



}
