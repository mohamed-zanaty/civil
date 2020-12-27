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
                        <label class="clabel">{{trans('admin.images')}}</label>
                        <div class="images-generator">
                          <div class="row">
                              <div class="col-sm-2">
                                <button type="button" class="gimg-btn"><i class="ti-upload"></i></button>
                              </div><!-- col -->
                              <div class="col-sm-10">
                              <div class="gimg-area">
                                @if(count(json_decode($result->images)))
                                @foreach(json_decode($result->images) as $img)
                                <div class="imgitem removeimg" data-img="{{$img}}">
                                  <i class="ti-close"></i>
                                  <img src="{{UPLOAD}}/{{$img}}" alt="">
                                </div><!-- imgitem -->
                                @endforeach
                                @endif
                              </div>

                              </div><!-- col -->
                          </div><!-- row -->
                        </div><!-- images-generator -->
                    </div>
            <div class="form-group m-b-40">
              <textarea  class="form-control input-sm" name="sdesc" required>{{$result->sdesc}}</textarea><span class="bar"></span>
                <label for="input8">{{trans('admin.sdesc')}}</label>
            </div>

            <div class="form-group m-b-40 ">
                <label class="clabel">{{trans('admin.active')}}</label>
                <div class="radioblock">
                  <input type="radio" class="check" name="active" value="1" @if($result->active == 1) checked @endif> <span> نعم </span>
                  <input type="radio" class="check" name="active" value="0" @if($result->active == 0) checked @endif> <span> لا </span>
                </div>
            </div>

            <div class="form-group remover">
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

    $(document).on('change','.imgitem input', function(event){
      var tmppath = URL.createObjectURL(event.target.files[0]);
      $(this).closest('.imgitem').find('img').attr('src', tmppath);
    });

    $(document).on('click','.imgitem i', function(event){
      var parent = $(this).closest('.imgitem');
      if(parent.hasClass('removeimg')){
        $('.remover').append('<input type="hidden" name="rimg[]" value="'+parent.attr('data-img')+'" />')
      }
      parent.remove();
    });

    $(document).on('click','.gimg-btn', function(event){
      $('.gimg-area').append('<div class="imgitem">'+
        '<i class="ti-close"></i>'+
        '<img src="" alt="">'+
        '<input type="file" name="images[]" value="">'+
      '</div><!-- imgitem -->');
    });

    });
</script>
@stop
