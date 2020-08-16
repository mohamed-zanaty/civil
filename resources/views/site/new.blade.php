@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> {{$new->title}} </h3>

            <div class="pageco">
              <a href="{{UPLOAD}}/{{$new->image}}" class="news-img" target="_blank"><img src="{{UPLOAD}}/{{$new->image}}" alt="{{$new->title}}"></a>
              {!! $new->content !!}
            </div><!-- pageco -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
@endsection
