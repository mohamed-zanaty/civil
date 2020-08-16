@extends('site.index')

@section('main')
<style>
    .pageco {
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
            <h3 class="mtitle"> {{$result->title}}</h3>
            <div class="pageco">
              {!!$result->code !!}
            </div><!-- pageco -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
    <script>
      $(document).ready(function(){

          $('.pageco img').attr('src', '{{UPLOAD}}/{{$result->image}}');
      });
      
    </script>
    <script>$(document).ready(function(e){$("map").imageMapResize();});</script>
@endsection
