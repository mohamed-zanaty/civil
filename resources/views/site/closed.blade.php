@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> الموقع مغلق</h3>
            <div class="pageco">
              {!! $set->cmsg !!}
            </div><!-- pageco -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
@endsection
