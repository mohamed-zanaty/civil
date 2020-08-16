<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Admin;
use App\User;
use App\Page;
use App\Media;
use Auth;
class HomeController extends Controller
{
  protected $type ;
  protected $var ;
  protected $model;

  public function __construct(Admin $model){
    $this->model = $model;
    $this->type  = 'admin';
    $this->var   = ADMIN;
  }


  public function Home(){
    return View($this->type.'.home')->with('title', trans('admin.home'));
  }

  public function activeToggle($col, $name, $id){
    switch ($name) {
      case 'users':
        $result = User::find($id);
        $result->$col = ($result->$col) ? 0 : 1;
        $result->update();
      break;
      case 'admins':
        $result = Admin::find($id);
        $result->$col = ($result->$col) ? 0 : 1;
        $result->update();
      break;
      case 'pages':
        $result = Page::find($id);
        $result->$col = ($result->$col) ? 0 : 1;
        $result->update();
      break;
    }
    return back();
    }

    public function Uploader(Request $r)
    {
      if($r->hasFile('image') && $r->file('image')->isValid()){
      	$ext = strtolower($r->file('image')->getClientOriginalExtension());
        $error = 1;
        $availMime = explode(',',UPLOADPATTERN);
        if(in_array($ext, $availMime)){
          $error = 0;
          $fullname = uploadNow('image', $r);
          $new = new Media;
          $new->ext = $ext;
          $new->url = $fullname;
          $new->aid = Auth::guard('admin')->id();
          $new->save();
          $newurl =  UPLOAD .'/'. $fullname;
          return Response()->json(['error' => $error, 'url' => $newurl, 'filename' => $fullname, 'ext' => $ext]);
        }
          return Response()->json(['error' => $error]);
      }
    }

}
