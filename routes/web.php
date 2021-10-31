<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\DB;

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('route:clear');

    $exitCode = Artisan::call('config:clear');

    $exitCode = Artisan::call('view:clear');

    return 'DONE'; //Return anything
});
Route::get('/ads.txt',function(){
   return view('ads');
});
Route::get('updateStudent',function(){
  $students = \App\Student::all();

  foreach ($students as $student){
      if($student->group->name == 'الأول'){
          $student->group_id = 34;
          $branc = DB::table("branch_group")->where("group_id",34)->first();
          $student->branch_id =$branc->branch_id;
          $student->save();
//dd($branc,$student);
      }
      else if($student->group->name == 'الثاني'){
          $student->group_id = 55;
          $branc = DB::table("branch_group")->where("group_id",55)->first();
          $student->branch_id =$branc->branch_id;
          $student->save();
//dd($branc,$student);
      } else if($student->group->name == 'الصف الثالث' || $student->group->name == 'الثالث') {
          $student->group_id = 36;
          $branc = DB::table("branch_group")->where("group_id", 36)->first();
          $student->branch_id = $branc->branch_id;
          $student->save();
      }
      else if($student->group->name == 'الرابع'){
              $student->group_id = 37;
              $branc = DB::table("branch_group")->where("group_id",37)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
//dd($branc,$student);
      }     else if($student->group->name == 'الخامس'){
              $student->group_id = 76;
              $branc = DB::table("branch_group")->where("group_id",76)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
//dd($branc,$student);
      }  else if($student->group->name == 'السادس'){
              $student->group_id = 39;
              $branc = DB::table("branch_group")->where("group_id",39)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
      } else if($student->group->name == 'السابع'){
              $student->group_id = 40;
              $branc = DB::table("branch_group")->where("group_id",40)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
      } else if($student->group->name == 'الثامن'){
              $student->group_id = 41;
              $branc = DB::table("branch_group")->where("group_id",41)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
      } else if($student->group->name == 'التاسع'){
              $student->group_id = 57;
              $branc = DB::table("branch_group")->where("group_id",57)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
      } else if($student->group->name == 'العاشر'){
              $student->group_id = 46;
              $branc = DB::table("branch_group")->where("group_id",46)->first();
              $student->branch_id =$branc->branch_id;
              $student->save();
      }
  }
//  dd($students->group == );

    return;
   return view('ads');
});
Route::get('welcome', 'PagesController@welcome');
Route::get('ted', 'PagesController@ted');
Route::get('blog', 'PagesController@blog');
Route::get('work', 'PagesController@work');
Route::get('hr', 'PagesController@hr');
Route::get('finans', 'PagesController@finans');
Route::get('contact', 'PagesController@contact');
Route::get('kg', 'PagesController@kg');
Route::get('prekg', 'PagesController@prekg');
Route::get('firstschool','PagesController@firstschool');
Route::get('secschool', 'PagesController@secschool');
Route::get('highschool', 'PagesController@highschool');

Route::get('login', 'PagesController@login');
Route::get('test', 'PagesController@test');

Route::get('mangement', 'PagesController@mangement');

Route::get('kgmang', 'PagesController@kgmang');
Route::get('Tedmangement', 'PagesController@Tedmangement');
Route::get('OnlineMangement', 'PagesController@OnlineMangement');

Route::get('prekgmang', 'PagesController@prekgmang');

Route::get('firstmang', 'PagesController@firstmang');

Route::get('secondmang', 'PagesController@secondmang');

Route::get('highmang', 'PagesController@highmang');

Route::get('news', 'PagesController@news');

Route::get('club', 'PagesController@club');


Route::get('bus', 'PagesController@bus');
Route::get('service', 'PagesController@service');


Route::get('interviewofice', 'PagesController@interviewofice');


Route::get('conectus', 'PagesController@conectus');
Route::post('SendMessage', 'PagesController@message')->name('SendMessage');

Route::resource('posts', 'PostsController');
Route::get('text/{id}', ['as' => 'post.text', 'uses' => 'PostsController@text']);
Route::get('display/{id}', ['as' => 'post.display', 'uses' => 'PostsController@display']);

Route::resource('texts', 'TextController@index');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();





Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
Route::get('photo/{id}', ['as' => 'crud.photo', 'uses' => 'CrudsController@photo']);


Route::resource('background','New\BackgroundController');
Route::resource('icon','New\IconController');
Route::resource('gallery','New\GalleryController');
Route::resource('courseCategory','New\CourseCategoryController');
Route::resource('courseView','New\CourseViewController');
Route::resource('backgroundOther','New\BackgroundOtherController');
Route::resource('haber','New\HaberController');
Route::resource('haberCard','New\HaberCardController');
Route::resource('rate','New\RateController');
Route::resource('employe','New\EmployeController');
Route::resource('region','New\RegionController');
Route::resource('disacount','New\DiscountController');
Route::resource('acount','New\acountController');
Route::resource('statment','New\StatmentController');
Route::resource('lock','New\LockController');
Route::get('employee/{id}', ['as' => 'employe.display', 'uses' => 'pagesController@displayEmployee']);
Route::get('displayHaber/{id}', ['as' => 'haberCard.display', 'uses' => 'pagesController@display']);

Route::resource('crud','CrudsController');
Route::get('/staff/create', ['as' => 'staff.create', 'uses' => 'CrudsController@createStaff']);
Route::get('/staff/edit', ['as' => 'staff.edit', 'uses' => 'CrudsController@editStaff']);


Route::resource('staff','StaffsController');
Route::get('staffphoto/{id}', ['as' => 'staff.photo', 'uses' => 'StaffsController@photo']);


Route::resource('subject', 'SubjectsController');

Route::resource('class', 'ClassesController');

Route::resource('branch', 'BranchesController');


Route::resource('exam', 'ExamsController');

Route::resource('student', 'StudentsController');
Route::resource('teacher', 'TeachersController');
Route::resource('year', 'YearsController');
Route::resource('semister', 'SemistersController');


Route::resource('group', 'GroupsController');

Route::resource('respon', 'Group_branch_subject_teachersController');


Route::resource('school', 'SchoolController');
Route::resource('message', 'New\MessageController');


Route::get('relation', ['as' => 'relation', 'uses' => 'Group_branch_subject_teachersController@getGroups']);

Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Group_branch_subject_teachersController@destroy']);

Route::get('studentdelete/{id}', ['as' => 'studentdelete', 'uses' => 'StudentsController@destroy']);

Route::get('relation/getBranches/{id}','Group_branch_subject_teachersController@getBranches');

Route::get('relation/getSubjects/{id}','Group_branch_subject_teachersController@getSubjects');

Route::get('AddStudent', ['as' => 'AddStudent', 'uses' => 'StudentsController@getGroups']);

Route::get('AddStudent/getBranches/{id}','StudentsController@getBranches');


Route::group(['prefix' => 'Student'], function () {
    Route::get('StudentLogin','Student\AuthController@login');
    Route::post('StudentLogin','Student\AuthController@attemp');
    Route::resource('StudentHome', 'Student\StudentHomeController');


    Route::get('Year/{year}','Student\StudentHomeController@year')->name('student.year');
Route::get('semister/{year}/{semister}','Student\StudentHomeController@semister')->name('student.semister');
Route::get('class/{year}/{semister}/{subject}','Student\StudentHomeController@class')->name('student.class');
Route::get('branch/{year}/{semister}/{class}/{branch}','Student\StudentHomeController@branch')->name('student.branch');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}','Student\StudentHomeController@subject')->name('student.subject');
Route::get('exam/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Student\StudentHomeController@exam')->name('student.exam');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}/{exam}/{student}','Student\StudentHomeController@student')->name('student.student');

Route::get('action/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Student\StudentHomeController@action')->name('student.action');
    Route::resource('StudentSubject', 'Student\StudentSubjectController');


    Route::get('lessons/{class}','Student\StudentSubjectController@group')->name('lessons.group');
    Route::resource('studentPersonal', 'Student\StudentPersonalController');



    });

Route::group(['prefix' => 'Teacher'], function () {
Route::resource('TeacherHome', 'Teacher\TeacherHomeController');
Route::get('Year/{year}','Teacher\TeacherHomeController@year')->name('teacher.year');
Route::get('semister/{year}/{semister}','Teacher\TeacherHomeController@semister')->name('teacher.semister');
Route::get('class/{year}/{semister}/{class}','Teacher\TeacherHomeController@class')->name('teacher.class');
Route::get('branch/{year}/{semister}/{class}/{branch}','Teacher\TeacherHomeController@branch')->name('teacher.branch');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}','Teacher\TeacherHomeController@subject')->name('teacher.subject');
Route::get('exam/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Teacher\TeacherHomeController@exam')->name('teacher.exam');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}/{exam}/{student}','Teacher\TeacherHomeController@student')->name('teacher.student');

Route::get('action/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Teacher\TeacherHomeController@action')->name('teacher.action');

Route::get('TeacherLogin','Teacher\AuthController@login');
Route::post('TeacherLogin','Teacher\AuthController@attemp');


Route::get('TeacherLogin','Teacher\AuthController@login');
Route::post('TeacherLogin','Teacher\AuthController@attemp');

Route::resource('category', 'Teacher\CategoryController');
Route::get('group/{class}','Teacher\CategoryController@group')->name('category.group');
Route::get('subjct/{class}/{subject}','Teacher\CategoryController@subjct')->name('category.subjct');
Route::get('actoin/{class}/{subject}','Teacher\CategoryController@actoin')->name('category.actoin');

Route::resource('TeacherLesson', 'Teacher\TeacherLessonController');
Route::get('class/{class}','Teacher\TeacherLessonController@class')->name('lesson.class');
Route::get('subject/{class}/{subject}','Teacher\TeacherLessonController@subject')->name('lesson.subject');
Route::get('action/{class}/{subject}','Teacher\TeacherLessonController@action')->name('lesson.action');

Route::resource('personal', 'Teacher\TeacherPersonalController');

});



Route::resource('takip', 'takipController');
//Route::get('TeacherHome', 'Teacher\TeacherHomeController@index');

