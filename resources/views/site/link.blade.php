@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> {{$result->title}} </h3>
            <div class="pageco">
              {!!$result->content !!}
            </div><!-- pageco -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
@endsection
