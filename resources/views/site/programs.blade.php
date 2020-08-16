@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> البرامج </h3>
            <div class="news">
              @if(count($programs))
              @foreach($programs as $program)
                <div class="news_item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a ><img src="{{UPLOAD}}/{{$program->image}}" alt="{{$program->title}}"></a>
                  </div><!-- col -->
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h3>{{$program->title}}</h3>
                    <span>{{@$program->created_at->diffForHumans()}}</span>
                    <p>{{$program->sdesc}}</p>
                    <a href="{{$program->file}}" class="programbtn" target="_blank">تحميل</a>
                  </div><!-- col -->
                </div><!-- news_item -->
              @endforeach
              <div class="pag">
                {!! $programs->render() !!}
              </div>
              @else
              <div role="alert" class="alert alert-danger alert-dismissible fade in text-right">
                 <span class="close" data-dismiss="alert">&times;</span>
                  لا توجد برامج مسجلة بالموقع
              </div>
              @endif
            </div><!-- news -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>


@endsection

@section('footer')
@endsection
