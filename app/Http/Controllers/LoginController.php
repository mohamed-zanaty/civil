<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use View;
use Validator;
use Auth;
use Hash;
use Mail;
use App\Mail\ResetMail;
use App\Admin;

class LoginController extends Controller
{
  protected $type ;
  protected $var ;
  protected $model;

  public function __construct(Admin $model){
    $this->model = $model;
    $this->type  = 'admin';
    $this->var   = ADMIN;
  }


  public function loginForm(){
    return View($this->var.'.login')
    ->with('title', trans('admin.login'));
  }

  public function Login(Request $r){
    $inputs = $r->all();
    $rules  = [
      'email'    => 'required|email',
      'password' => 'required'
    ];
    $msgs   = [
      'email.required'    => trans('admin_auth.emailRequired'),
      'email.email'       => trans('admin_auth.invalidEmail'),
      'password.required' => trans('admin_auth.passwordRequired'),
    ];

    $validator = Validator::make($inputs, $rules, $msgs);
    if($validator->fails()){
      return back()->withInput($r->only('email', 'remember'))->withErrors($validator);
    }else{
      $remember = (isset($inputs['remember'])) ? 1 : 0;
      $attempt = Auth::guard($this->type)->attempt(['email' => $inputs['email'], 'password' => $inputs['password'], 'active' => 1], $remember);
      if($attempt){
        return redirect()->intended($this->type);
      }else{
        session(['fails' => trans('admin.loginfail')]);
        return back();
      }
    }
  }

  public function Remember(Request $r){
    $input = $r->all();
    $rules  = [
      'email'    => 'required|email'
    ];
    $msgs   = [
      'email.required'    => trans('admin.emailRequired'),
      'email.email'       => trans('admin_auth.invalidEmail'),
    ];
    $validator = Validator::make($input, $rules, $msgs);
    if($validator->fails()){
      return back()->withInput()->withErrors($validator);
    }else{
      $result = $this->model->where('email', $input['email'])->first();
      if(count($result)){
        $result->remember_token = Hash::make($result->id);
        $result->update();
        Mail::to([$result->email])->send(new ResetMail($result));
        session(['success' => trans('admin.foundaccount')]);
      }else{
        session(['fails' => trans('admin.noaccount')]);
      }
      return back();
    }
  }

  public function Reset($token){
    if(!isset($token)){
     return redirect($this->type.'/login');
    }
    $result = $this->model->where('remember_token', $token)->first();
    if(count($result)){
      return View($this->var.'.reset')
      ->with('result', $result)
      ->with('title',trans('admin.changepassword'));
    }else{
      session(['fails' => trans('admin.rememberagain')]);
    }
    return redirect($this->type.'/login');
  }

  public function ResetPost(Request $r, $token){
    if(!isset($token)){
     return redirect($this->type.'/login');
    }
    $input = $r->all();
    $rules  = [
     'password' => 'required|confirmed'
    ];
    $msgs   = [
     'password.required' => trans('admin_auth.passwordRequired'),
     'password.confirmed' => trans('admin_auth.passwordConfirm'),
    ];

    $validator = Validator::make($input, $rules, $msgs);
    if($validator->fails()){
     return back()->withErrors($validator);
    }else{
    $result = $this->model->where('remember_token', $token)->first();
    if(count($result)){
      $result->remember_token = '';
      $result->password = $input['password'];
      $result->update();
      session(['success' => trans('admin.resetdone')]);
      Auth::guard($this->type)->attempt(['email' => $result->email , 'password' => $input['password'], 'active' => $result->active], 0);
      return redirect($this->type);
    }else{
      session(['fails' => trans('admin.rememberagain')]);
    }
    return redirect($this->type.'/login');
    }
  }
  public function logout()
  {
    Auth::guard($this->type)->logout();
    return redirect($this->type.'/login');
  }
}
