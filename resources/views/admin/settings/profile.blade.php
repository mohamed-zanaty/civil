@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/assets/plugins/icheck/skins/all.css')}}" rel="stylesheet">
<link href="{{asset('style/assets/plugins/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">
@stop


@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'files' => true]) !!}
        <div class="form-group m-b-40">
            <input type="text" class="form-control input-sm" name="name" required value="{{$result->name}}"><span class="bar"></span>
            <label for="input8">{{trans('admin.name')}}</label>
        </div>
        <div class="form-group m-b-40">
              <input type="text" class="form-control input-sm" name="email" required value="{{$result->email}}"><span class="bar"></span>
              <label for="input8">{{trans('admin.email')}}</label>
          </div>

          <div class="form-group m-b-40">
              <input type="text" class="form-control input-sm" name="phone" required value="{{$result->phone}}"><span class="bar"></span>
              <label for="input8">{{trans('admin.phone')}}</label>
          </div>

          <div class="form-group m-b-40">
              <input type="password" class="form-control input-sm" name="password" ><span class="bar"></span>
              <label for="input8">{{trans('admin.password')}}</label>
          </div>

          <div class="form-group m-b-40">
              <input type="password" class="form-control input-sm" name="password_confirmation" ><span class="bar"></span>
              <label for="input8">{{trans('admin.rpassword')}}</label>
          </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.update')}}</button>
            </div>

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('footer')
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
