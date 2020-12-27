@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/')}}/assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">
<link href="{{asset('style/')}}/assets/plugins/icheck/skins/all.css" rel="stylesheet">

@stop


@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'route'=> $parentroute . '.store', 'files' => true]) !!}
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="title" required value="{{old('title')}}"><span class="bar"></span>
                <label for="input8">{{trans('admin.title')}}</label>
            </div>

            <div class="form-group m-b-40">
              <textarea  class="form-control input-sm" name="sdesc" required>{{old('reason')}}</textarea><span class="bar"></span>
                <label for="input8">{{trans('admin.sdesc')}}</label>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.add')}}</button>
            </div>

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('footer')
<script src="{{asset('style/assets/plugins/icheck/icheck.min.js/')}}"></script>
<script src="{{asset('style/assets/plugins/icheck/icheck.init.js')}}"></script>
<script src="{{asset('style/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>
@stop
