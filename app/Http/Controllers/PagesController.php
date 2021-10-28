<?php

namespace App\Http\Controllers;

use App\Background;
use App\BackgroundOther;
use App\CourseCategory;
use App\CourseView;
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
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
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

        $background = BackgroundOther::where('type','blog')->first();
//        dd($background);
        return view('pages.blog', compact('background','GalleryFirst','GallerySecond','GalleryThird','mangement','Tedmangement'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }
    public function hr()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','hr')->first();
//        dd($background);
        return view('pages.hr', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
    }
    public function finans()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
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

        $background = BackgroundOther::where('type','finans')->first();
//        dd($background);
        return view('pages.finans', compact('mangement','Tedmangement','background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
    }
    public function work()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
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

        $background = BackgroundOther::where('type','work')->first();
//        dd($background);
        return view('pages.work', compact('mangement','Tedmangement','background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
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
        $CourseView = CourseView::all();
        $CourseCategory = CourseCategory::all();

//         dd($CourseView);
        return view('pages.ted', compact('CourseCategory','CourseView','GalleryFirst','GallerySecond','GalleryThird','GalleryForth','OnlineMangement','ThirdMangement','SecondMangement','FirstMangement','PreMangement','BabeMangement','Tedmangement','mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
    {   $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','kg')->first();
//        dd($background);
        return view('pages.kg', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    public function prekg()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

$background = BackgroundOther::where('type','Babe')->first();
//        dd($background);
        return view('pages.prekg', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
             'BabeMangement',
              'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }

    public function firstschool()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','firstschool')->first();
//        dd($background);
        return view('pages.firstschool', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function secschool()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','secschool')->first();
//        dd($background);
        return view('pages.secschool', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);



    }

    public function highschool()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','highschool')->first();
        return view('pages.highschool', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.mangement', compact('GalleryFirst','GallerySecond','GalleryThird',
            'GalleryForth'
      ,'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $mangement = Employe::where('page','PreMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.kgmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $mangement = Employe::where('page','BabeMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.prekgmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth'
            ,'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $mangement = Employe::where('page','FirstMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.firstmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $mangement = Employe::where('page','SecondMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.secondmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $mangement = Employe::where('page','ThirdMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.highmang', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }
    public function Tedmangement(){
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
        $mangement = Employe::where('page','Tedmangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.tedMangement', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);


    }
    public function OnlineMangement(){
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
        $mangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GalleryAll = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        //dd($GalleryFirst);
        return view('pages.OnlineMangement', compact('GalleryFirst','GallerySecond','GalleryThird','GalleryForth',
            'mangement','parentsRate','teachersRate','studentsRate','backgrounds','icons', 'habers','haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
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
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
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
        $background = BackgroundOther::where('type','club')->first();
        return view('pages.club', compact('mangement','Tedmangement','background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function bus()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
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


        $background = BackgroundOther::where('type','bus')->first();
        return view('pages.bus', compact('mangement','Tedmangement','background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }

    public function service()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','service')->first();
        return view('pages.service', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function interviewofice()
    {
        $habers = Haber::orderBy('created_at', 'desc')->paginate(10);
        $haberCards1 = HaberCard::where('type','أخر الأخبار')->get();
        $haberCards2 = HaberCard::where('type','النشاطات')->get();
        $haberCards3 = HaberCard::where('type','الزيارات')->get();
        $haberCards4 = HaberCard::where('type','القرارات')->get();
        $haberCards5 = HaberCard::where('type','التعليمات الادارية')->get();
        $BabeMangement = Employe::where('page','BabeMangement')->get();
        $PreMangement = Employe::where('page','PreMangement')->get();
        $FirstMangement = Employe::where('page','FirstMangement')->get();
        $SecondMangement = Employe::where('page','SecondMangement')->get();
        $ThirdMangement = Employe::where('page','ThirdMangement')->get();
        $OnlineMangement = Employe::where('page','OnlineMangement')->get();
        $GalleryFirst = Gallery::where('title','first')->get()->pluck('image');
        $GallerySecond = Gallery::where('title','second')->get()->pluck('image');
        $GalleryThird = Gallery::where('title','third')->get()->pluck('image');
        $GalleryForth = Gallery::where('title','forth')->get()->pluck('image');

        $background = BackgroundOther::where('type','interviewofice')->first();
        return view('pages.interviewofice', compact('background','GalleryFirst','GallerySecond','GalleryThird'
            ,'GalleryForth','SecondMangement','PreMangement','FirstMangement','ThirdMangement','OnlineMangement',
            'BabeMangement',
            'habers',
            'haberCards1','haberCards2','haberCards3','haberCards4','haberCards5'))
            ->with('i', (request()->input('page', 1) - 1) * 50);

    }


    public function conectus(){
        return view('pages.conectus');
    }

    public function test(){
        return view('pages.test');
    }



}
