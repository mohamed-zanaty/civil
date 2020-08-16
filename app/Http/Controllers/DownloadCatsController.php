<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Validator;
use Auth;
use App\CDownloads;
use App\Admin;

class DownloadCatsController extends Controller
{
  private $parentRoute;     /* parent route name */
  private $title;           /* Title showen in browser */
  private $titleType;       /* singular of title */
  private $viewName;        /* view path */
  private $postCount;       /* Paginate count */
  private $model;           /* Main Model */
  private $rules_add;       /* rules for adding */
  private $rules_edit;      /* rules for Editing  */
  private $msgs;            /* custom text for errors */
  private $add_msg;        /* session done message */
  private $addFails_msg;       /* session fasil message */
  private $edit_msg;        /* session edit message */
  private $editFails_msg;       /* session fasil message */
  private $del_msg;         /* session delete message */
  private $delFails_msg;       /* session fasil message */
  private $addnew_title;
  private $edit_title;
  private $frontRows;
  private $adminId;
  public function __construct(CDownloads $model){

    $this->parentRoute = 'download_cats';
    $this->titleType   = trans('admin.download_cat');
    $this->postCount   = 20;
    $this->middleware(function ($request, $next) {
        $this->adminId = Auth::guard('admin')->id();
        return $next($request);
    });

    $this->title       = trans('admin.'.$this->parentRoute);
    $this->viewName    = ADMIN.'.'. $this->parentRoute .'.';
    $this->model       = $model;

    $this->add_msg        = trans('admin.addSuccess');
    $this->addFails_msg  = trans('admin.addFails');
    $this->edit_msg       = trans('admin.editSuccess');
    $this->editFails_msg = trans('admin.editFails');
    $this->del_msg        = trans('admin.delSuccess');
    $this->delFails_msg  = trans('admin.delFails');
    $this->addnew_title   = trans('admin.addnew');
    $this->edit_title     = trans('admin.edit');

    $this->frontRows = [ 'title','image' ];

    $this->rules_add   = [
                          'title' => 'required',
                          'code' => 'required',
                          'image' => 'required|image',
                        ];
    $this->rules_edit  = [
                          'title' => 'required',
                          'code' => 'required',
                        ];

    $this->msgs        = [
                          'title.required' => trans('admin_auth.titleRequired'),
                          'code.required' => 'يجب ادخال كود الخطة',
                          'image.required' => trans('admin_auth.imageRequired'),
                          'image.image' => trans('admin_auth.invalidImage'),
                        ];

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $results = $this->model->paginate($this->postCount);
         return View($this->viewName. 'index')
         ->with('title', $this->title)
         ->with('results', $results)
         ->with('showadd', 1)
         ->with('frontRows', $this->frontRows)
         ->with('parentroute', $this->parentRoute);
     }

     public function deleteList(Request $r){
       $ids = $r->get('id');
       if(!empty($ids)){
         $this->model->whereIn('id', $ids)->delete();
         session(['success' => $this->del_msg]);
       }
       return back();
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       return View($this->viewName . 'add')
       ->with('title', $this->addnew_title )
       ->with('parentroute', $this->parentRoute);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
      $input = $r->all();
      $validator = Validator::make($input, $this->rules_add, $this->msgs);
      if($validator->fails()){
        return back()->withInput()->withErrors($validator);
      }else{
        $result = new $this->model;
        $result->title = $input['title'];
    		if($r->hasFile('image') && $r->file('image')->isValid()){
    			$result->image = uploadNow('image', $r);
    		}
        $result->code = $input['code'];
        $result->aid = $this->adminId;
        if($result->save()){
          session(['success'=>$this->add_msg]);
          return redirect('admin/'.$this->parentRoute);
        }else{
          session(['fails'=>$this->addFails_msg]);
          return back();
        }
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $result = $this->model->find($id);
       $lastmodified = @Admin::find($result->aid)->username;
       return View($this->viewName . 'edit')
       ->with('title', $this->edit_title . ' ' . $this->titleType )
       ->with('parentroute', $this->parentRoute)
       ->with(compact('result', 'lastmodified'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
      $input = $r->all();
      $validator = Validator::make($input,  $this->rules_edit, $this->msgs);
      if($validator->fails()){
        return back()->withInput()->withErrors($validator);
      }else{
        $result = $this->model->find($id);
        $result->title = $input['title'];
    		if($r->hasFile('image') && $r->file('image')->isValid()){
    			@unlink(UPLOAD. '/' .$result->image);
    			$result->image = uploadNow('image', $r);
    		}
        $result->code = $input['code'];
        $result->aid = $this->adminId;
        if($result->update()){
          session(['success'=>$this->edit_msg]);
          return redirect('admin/'.$this->parentRoute);
        }else{
          session(['fails'=>$this->editFails_msg]);
          return back();
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $result = $this->model->find($id);
         if($result->delete()){
           session(['success'=>$this->del_msg]);
         }else{
           session(['fails'=>$this->$delFails_msg]);
         }
         return back();
     }
}
