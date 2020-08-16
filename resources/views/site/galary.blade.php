@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> معرض الصور </h3>
            <div class="gallaries">
              @if(count($galaries))
              @foreach($galaries as $galary)

              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="gallary_item">
                  <img src="{{UPLOAD}}/{{$galary->image}}" alt="">
                  <a href="#" data-id=".galary{{$galary->id}}" data-desc="{{$galary->sdesc}}"><i class="fa fa-eye"></i> {{$galary->title}} </a>
                </div><!-- gallary_item -->
              </div><!-- col -->
            @endforeach
            <div class="pag">
              {!! $galaries->render() !!}
            </div>
            @else
            <div role="alert" class="alert alert-danger alert-dismissible fade in text-right">
               <span class="close" data-dismiss="alert">&times;</span>
              لا توجد البومات صور مسحلة بالموقع
            </div>
            @endif

            </div><!-- gallaries -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>


    <div class="gallarymask">
      <i class="gmclose fa fa-times"></i>
      <div class="owl2desc"></div>
      <div class="gallaryco">
        @foreach($galaries as $galary)
          <div class="owl2 owl-theme hidden galary{{$galary->id}}" style="direction:ltr">
            @if(count(json_decode($galary->images)))
            @foreach(json_decode($galary->images) as $img)
            <div class="item"><img src="{{UPLOAD}}/{{$img}}" alt="{{$galary->title}}"></div>
            @endforeach
            @endif
          </div><!-- owl2 -->
        @endforeach
      </div><!-- gallaryco -->
    </div><!-- gallarymask -->

@endsection

@section('footer')
    <script>
      $(document).ready(function(){
        $('.gmclose').on('click', function(){
          $('.gallarymask').fadeOut(300);
          $('.gallarymask .owl2desc').text('');
          $('.gallarymask .owl2').addClass('hidden');
        });
        $('.gallary_item > a').on('click', function(e){
            e.preventDefault();
            var gid = $(this).attr('data-id');
            var gdesc = $(this).attr('data-desc');
            $('.gallarymask ' + gid).removeClass('hidden');
            $('.gallarymask .owl2desc').text(gdesc);
            $('.gallarymask').fadeIn(300);
        });//on
      });
    </script>
@endsection
