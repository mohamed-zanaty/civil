@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/assets/plugins/icheck/skins/all.css')}}" rel="stylesheet">
<link href="{{asset('style/assets/plugins/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">
@stop


@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'url' => 'admin/' . $parentroute . '/' . $result->id, 'method' => 'PUT', 'files' => true]) !!}
          <div class="form-group m-b-40">
              <input type="text" class="form-control input-sm" name="title" required value="{{$result->title}}"><span class="bar"></span>
              <label for="input8">{{trans('admin.title')}}</label>
          </div>
          <div class="form-group m-b-40">
              <label class="clabel">{{trans('admin.image')}}</label>
              <input type="file" name="image" class="dropify" data-default-file="{{UPLOAD}}/{{$result->image}}" />
          </div>
          <div class="form-group m-b-40">
              <textarea name="code" class="form-control input-sm">{{$result->code}}</textarea>  <span class="bar"></span>
              <label for="input8">كود الخطة</label>
          </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.update')}}</button>
            </div>

        {!! Form::close() !!}
    </div>
</div>


@stop
@section('footer')
<script src="{{asset('style/assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('style/assets/plugins/icheck/icheck.min.js')}}"></script>
<script src="{{asset('style/assets/plugins/icheck/icheck.init.js')}}"></script>
<script src="{{asset('style/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>
@stop
