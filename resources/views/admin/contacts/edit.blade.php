@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/assets/plugins/icheck/skins/all.css')}}" rel="stylesheet">
<link href="{{asset('style/assets/plugins/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">
@stop


@section('main')


<div class="card">
    <div class="card-block">
      <div class="card b-all shadow-none">
          <div class="card-block">
              <h3 class="card-title m-b-0">{{$result->subject}}</h3>
          </div>
          <div>
              <hr class="m-t-0">
          </div>
          <div class="card-block">
              <div class="d-flex m-b-40">
                  <div>
                      <a href="javascript:void(0)"><img src="{{UPLOAD}}/{{$set->sitelogo}}" alt="{{$set->sitename}}" width="40" height="40" class="img-circle" /></a>
                  </div>
                  <div class="p-l-10">
                      <h4 class="m-b-0">{{$result->name}}</h4>
                      <small class="text-muted">{{trans('admin.from')}} : {{$result->email}}</small>
                  </div>
              </div>
              <p>{{$result->message}}</p>
          </div>
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
