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
                <input type="text" class="form-control input-sm" name="name" required value="{{old('name')}}"><span class="bar"></span>
                <label for="input8">{{trans('admin.name')}}</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="email" required value="{{old('email')}}"><span class="bar"></span>
                <label for="input8">{{trans('admin.email')}}</label>
            </div>

            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="phone" required value="{{old('phone')}}"><span class="bar"></span>
                <label for="input8">{{trans('admin.phone')}}</label>
            </div>

            <div class="form-group m-b-40">
              <textarea  class="form-control input-sm" name="reason" required>{{old('reason')}}</textarea><span class="bar"></span>
                <label for="input8">{{trans('admin.reason')}}</label>
            </div>
            <div class="form-group m-b-40">
                <input type="password" class="form-control input-sm" name="password" required><span class="bar"></span>
                <label for="input8">{{trans('admin.password')}}</label>
            </div>

            <div class="form-group m-b-40">
                <input type="password" class="form-control input-sm" name="password_confirmation" required><span class="bar"></span>
                <label for="input8">{{trans('admin.rpassword')}}</label>
            </div>

            <div class="form-group m-b-40 ">
                <label class="clabel">{{trans('admin.active')}}</label>
                <div class="radioblock">
                  <input type="radio" class="check" name="active" value="1" checked> <span> نعم </span>
                  <input type="radio" class="check" name="active" value="0" > <span> لا </span>
                </div>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.add')}}</button>
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
