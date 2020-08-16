@extends(ADMIN.'.index')

@section('header')
<link href="{{ADMINSTYLE}}/assets/plugins/icheck/skins/all.css" rel="stylesheet">
<link href="{{ADMINSTYLE}}/assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">
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
              <textarea  class="form-control input-sm" name="sdesc" required>{{$result->sdesc}}</textarea><span class="bar"></span>
                <label for="input8">{{trans('admin.sdesc')}}</label>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.update')}}</button>
            </div>

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('footer')
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.min.js"></script>
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.init.js"></script>
<script src="{{ADMINSTYLE}}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>
@stop
