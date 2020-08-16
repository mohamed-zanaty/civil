@extends('site.index')

@section('main')

<section>
  <div class="container">
    <div class="slider">
      <div class="owl1 owl-theme" style="direction:ltr">
          @foreach($slides as $slide)
          <div class="item">
              <div class="owl1co">
                  <h3>{{$slide->title}}</h3>
                  <p>{{$slide->sdesc}}</p>
              </div><!-- owlco -->
          </div><!-- item -->
          @endforeach
        </div><!-- owl1 -->
      </div><!-- slider -->
    </div><!-- continer -->
</section>

@endsection

@section('footer')
@endsection
