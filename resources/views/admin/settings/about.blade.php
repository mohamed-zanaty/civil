@extends(ADMIN.'.index')

@section('header')
<link href="{{ADMINSTYLE}}/assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">

@stop

@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'files'=> true]) !!}
  
            <div class="form-group m-b-40">
              <label class="clabel">من نحن</label>
              <textarea  class="form-control input-sm ckeditor" name="about_content" required>{{$set->about_content}}</textarea>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.update')}}</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>


@stop


@section('footer')
<script src="{{ADMINSTYLE}}/assets/plugins/ckeditor/ckeditor.js"></script>
<script src="{{ADMINSTYLE}}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>

@stop
