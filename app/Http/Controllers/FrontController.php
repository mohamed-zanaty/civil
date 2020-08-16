<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Contact;
use App\News;
use App\Galary;
use App\Program;
use App\CDownloads;
use App\Downloads;
use App\Set;
use Validator;
use Mail;
use App\Mail\ContactMail;

class FrontController extends Controller
{
  protected $type ;
  protected $var ;
  protected $model;

  public function __construct(){
      if(Set::find(1)->status == 0)
      return redirect('closed')->send();
    $this->var   = SITE;
  }

  public function home(){
    $set = Set::find(1);
    $set->visits = $set->visits + 1;
    $set->update();
    $slides = Slide::all();
    return View($this->var.'.home')
    ->with('slides', $slides)
    ->with('title', 'الرئيسية');
  }

  public function p404(){
    return View($this->var.'.404')
    ->with('title', 'صفحة غير موجودة');
  }

  public function treePlan(){
    return View($this->var.'.tree')
    ->with('title', 'الخطة الشجرية');
  }

  public function yearsPlan(){
    return View($this->var.'.years')
    ->with('title', 'الخطة الاسترشادية');
  }
  public function gpa(){
    return View($this->var.'.gpa')
    ->with('title', 'حساب المعدل');
  }

  public function Programs(){
    $programs = Program::paginate(8);
    return View($this->var.'.programs')
    ->with('programs', $programs)
    ->with('title', 'البرامج');
  }

  public function ProjectsById($id){
    $project = Project::find($id);
    if(!count($project)){
      return redirect('404');
    }
    return View($this->var.'.new')
    ->with('new', $project)
    ->with('title', $project->title);
  }

  public function News(){
    $news = News::all();
    return View($this->var.'.news')
    ->with('news', $news)
    ->with('title', 'الاخبار');
  }

  public function Gallary(){
    $galaries = Galary::where('active', 1)->paginate(16);
    return View($this->var.'.galary')
    ->with('galaries', $galaries)
    ->with('title', 'معرض الصور');
  }

  public function NewsById($id){
    $new = News::find($id);
    if(!count($new)){
      return redirect('404');
    }
    return View($this->var.'.new')
    ->with('new', $new)
    ->with('title', $new->title);
  }

  public function getPlan($id){
    $result = CDownloads::find($id);
    if(!count($result)){
      return redirect('404');
    }
    return View($this->var.'.plan')
    ->with('result', $result)
    ->with('title', $result->title);
  }

  public function getLink($id){
    $result = Downloads::find($id);
    if(!count($result)){
      return redirect('404');
    }
    return View($this->var.'.link')
    ->with('result', $result)
    ->with('title', $result->title);
  }

  public function aboutUs(){
    return View($this->var.'.about')
    ->with('title', 'من نحن');
  }

  public function Download($id=0){
    if(intval($id) > 0){
      $ca = CDownloads::find($id);
      if(!count($ca)){
        return redirect('404');
      }
    }else{
      $ca = CDownloads::orderby('id','asc')->first();
      if(count($ca))
      $id  = $ca->id;
    }
    return View($this->var.'.download')
    ->with('ca', $ca)
    ->with('id', $id)
    ->with('title', 'مركز التحميل');
  }

  public function contactUs(){
    return View($this->var.'.contact')
    ->with('title', 'اتصل بنا');
  }
  public function postContactUs(Request $r){
    $input = $r->all();
    $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
          ];
    $msgs = [
      'name.required' => 'يجب كتابة الاسم',
      'email.required' => 'يجب ادخال البريد الالكترونى',
      'email.email' => 'يجب كتابة بريد الكترونى صحيح',
      'phone.required' => 'يجب ادخال رقم الجوال',
      'subject.required' => 'يجب ادخال عنوان الرسالة',
      'message.required' => 'يجب ادخال محتوى الرسالة',
    ];
    $validator = Validator::make($input, $rules, $msgs);
    if($validator->fails()){
      return back()->withInput()->withErrors($validator);
    }else{
      $result = new Contact;
      $result->name = strip_tags($input['name']);
      $result->email = strip_tags($input['email']);
      $result->phone = strip_tags($input['phone']);
      $result->subject = strip_tags($input['subject']);
      $result->message = strip_tags($input['message']);
      $result->isread = 0;
      Mail::to([Set::find(1)->sitemail])->send(new ContactMail($result));
      if($result->save()){
        session(['success' => 'تم ارسال رسالتك بنجاح ، سيتم الرد عليكم باقرب وقت ممكن.']);
      }else{
        session(['fails' => 'هناك خطأ ما برجاء المحاولة فيما بعد.']);
      }
    }
    return back();
  }


}
