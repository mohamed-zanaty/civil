@extends('site.index')

@section('main')
<style>
    .downloadview {
        text-align:center;
        position:relative;
    }
    .pageco1 img{
        max-width:100%;
        height:auto;
    }
</style>
    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> مركز التحميل  </h3>
            <div class="download_center">
              <?php
               $cats = App\CDownloads::orderby('id','asc')->get();
              ?>
              @if(count($cats))

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="downloadlist">
                  <ul>
                    @foreach($cats as $cat)
                    <li><a class="maind @if($id == $cat->id) dact @endif" href="{{url('')}}/download-{{$cat->id}}" data-image="{{url('')}}/plan-{{$cat->id}}" data-link="{{url('')}}/plan-{{$cat->id}}"> <i class="fa fa-arrow-circle-left"></i> {{$cat->title}}</a></li>
                    @endforeach
                  </ul>
                </div><!-- downloadlist -->
              </div><!-- col -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="downloadview">
                  <h3 class="mtitle"> {{$ca->title}}</h3>

                  {!!$ca->code !!}
                </div><!-- downloadview -->
              </div><!-- col -->
              @endif
            </div><!-- download_center -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
    @if(count($cats))
        <script>
          $(document).ready(function(){

              $('.downloadview img').attr('src', '{{UPLOAD}}/{{$ca->image}}');
          });

        </script>
        <script>$(document).ready(function(e){$("map").imageMapResize();});</script>
        @endif
@endsection
