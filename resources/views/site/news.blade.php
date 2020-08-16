@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> الاخبار </h3>
            <div class="projects">
              @if(count($news))
                <div class="sync3 owl-theme" style="direction:ltr">

                  @foreach($news as $new)
                    <div class="item">
                      <a href="{{url('')}}/news/{{$new->id}}" class="projectdesc">
                        <h3>{{$new->title}}</h3>
                        <p>{!! Str::words(strip_tags($new->content), 20, '...') !!}</p> 
                      </a><!-- projectdesc -->
                      <img src="{{UPLOAD}}/{{$new->image}}" alt="">
                    </div><!-- item -->
                    @endforeach
                </div><!--tourowl-->
                <div class="sync4 owl-theme" style="direction:ltr">

                    @foreach($news as $new)
                    <div class="item"><img src="{{UPLOAD}}/{{$new->image}}" alt="{{$new->title}}"></div><!-- item -->
                    @endforeach
                </div><!--tourowl1-->

                @else
                <div role="alert" class="alert alert-danger alert-dismissible fade in text-right">
                   <span class="close" data-dismiss="alert">&times;</span>
                  لا توجد مشاريع مسجلة بالموقع
                </div>
                @endif
            </div><!-- projects -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>
    
@endsection

@section('footer')
@endsection
