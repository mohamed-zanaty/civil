<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Set;
use App\Admin;
use Validator;
use Auth;

class SettingsController extends Controller
{
  protected $type ;
  protected $var ;
  protected $model;

  public function __construct(Set $model){
    $this->type  = 'admin';
    $this->var   = ADMIN;
    $this->model = $model;
  }

  public function Profile(){
    $result = Auth::guard($this->type)->user();
    return View($this->var.'.settings.profile')
    ->with('result', $result)
    ->with('title', trans('admin.profile'));
  }

  public function postProfile(Request $r){
    $rules_edit  = [
                          'name' => 'required',
                          'phone' => 'required',
                          'email' => 'required|email',
                        ];

    $msgs        = [
                          'name.required' => trans('admin_auth.nameRequired'),
                          'phone.required' => trans('admin_auth.phoneRequired'),
                          'email.required' => trans('admin_auth.emailRequired'),
                          'email.email' => trans('admin_auth.invalidEmail'),
                          'email.unique' => trans('admin_auth.tokenEmail'),
                        ];

      $input = $r->all();
      if(isset($input['password']) && trim($input['password']) != ''){
          $this->rules_edit['password'] = 'required|confirmed';
          $this->msgs['password.required'] = trans('admin_auth.passwordRequired');
          $this->msgs['password.confirmed'] = trans('admin_auth.passwordConfirm');
        }
      $validator = Validator::make($input,  $rules_edit, $msgs);
      if($validator->fails()){
        return back()->withInput()->withErrors($validator);
      }else{
        $result = Auth::guard($this->type)->user();
        $result->name = $input['name'];
        $result->phone = $input['phone'];
        $result->email = $input['email'];
        if(isset($input['password']) && trim($input['password']) != ''){
            $result->password = $input['password'];
          }
        if($result->update()){
          Session(['success'=> trans('admin.editSuccess') ]);
    		}else{
    			Session(['fails' => trans('admin.editFails') ]);
        }
        return back();
      }
  }

  public function Settings(){
    return View($this->var.'.settings.settings')
    ->with('title', trans('admin.setting'));
  }

  public function postSettings(Request $r){
    $input = $r->all();
    $result = $this->model->find(1);
    $result->sitename = $input['sitename'];
		if($r->hasFile('sitelogo') && $r->file('sitelogo')->isValid()){
			@unlink(UPLOAD. '/' .$result->sitelogo);
			$result->sitelogo = uploadNow('sitelogo', $r);
		}
		if($r->hasFile('sitebg') && $r->file('sitebg')->isValid()){
			@unlink(UPLOAD. '/' .$result->sitebg);
			$result->sitebg = uploadNow('sitebg', $r);
		}
		$result->sitemail 	  = $input['sitemail'];
		$result->desc 	  = $input['desc'];
    $result->tags 	  = $input['tags'];
    $result->status 	  = $input['status'];
    $result->cmsg 	  = $input['cmsg'];
    $result->facebook 	  = $input['facebook'];
    $result->twitter 	  = $input['twitter'];
    $result->youtube 	  = $input['youtube'];
    $result->instagram 	  = $input['instagram'];
    $result->location 	  = $input['location'];
    $result->zmap 	  = $input['zmap'];
    $result->phone 	  = $input['phone'];
    $result->tel 	  = $input['tel'];
    $result->aid = Auth::guard('admin')->id();
    if($result->update()){
			Session(['success'=> trans('admin.editSuccess') ]);
		}else{
			Session(['fails' => trans('admin.editFails') ]);
		}
		return back();
  }

  public function About(){
    return View($this->var.'.settings.about')
    ->with('title', 'من نحن');
  }

  public function postAbout(Request $r){
    $input = $r->all();
    $result = $this->model->find(1);
    $result->about_content 	  = $input['about_content'];
    $result->aid = Auth::guard('admin')->id();
    if($result->update()){
			Session(['success'=> trans('admin.editSuccess') ]);
		}else{
			Session(['fails' => trans('admin.editFails') ]);
		}
		return back();
  }
  
    public function closed(){
      if(Set::find(1)->status){
  			return redirect('/');
  		}
      return View('site.closed')
      ->with('title', 'الموقع مغلق');
    }
}
