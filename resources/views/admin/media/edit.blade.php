@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/assets/plugins/icheck/skins/all.css')}}" rel="stylesheet">
<link href="{{asset('style/assets/plugins/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">
@stop


@section('main')
v class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'url' => 'admin/' . $parentroute . '/' . $result->id, 'method' => 'PUT', 'files' => true]) !!}

          <div class="form-group m-b-40">
              <label class="clabel">{{trans('admin.url')}}</label>
              <input type="file" name="url" class="dropify" data-default-file="{{UPLOAD}}/{{$result->url}}" />
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
<script src="{{asset('style//assets/plugins/icheck/icheck.min.js')}}"></script>
<script src="{{asset('style//assets/plugins/icheck/icheck.init.js')}}"></script>
<script src="{{asset('style/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>
@stop
