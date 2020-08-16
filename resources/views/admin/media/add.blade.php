@extends(ADMIN.'.index')

@section('header')
<link href="{{ADMINSTYLE}}/assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">
<link href="{{ADMINSTYLE}}/assets/plugins/icheck/skins/all.css" rel="stylesheet">

@stop


@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'route'=> $parentroute . '.store', 'files' => true]) !!}

            <div class="form-group m-b-40">
                <label class="clabel">{{trans('admin.url')}}</label>
                <input type="file" name="url" class="dropify" />
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.add')}}</button>
            </div>

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('footer')
<script src="{{ADMINSTYLE}}/assets/plugins/ckeditor/ckeditor.js"></script>
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.min.js"></script>
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.init.js"></script>
<script src="{{ADMINSTYLE}}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>
@include(ADMIN.'.inc.mediamanger')
@stop
