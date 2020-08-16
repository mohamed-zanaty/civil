@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="page">
            <h3 class="mtitle"> من نحن </h3>
            <div class="pageco">
              {!!$set->about_content !!}
            </div><!-- pageco -->
          </div><!-- page -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
@endsection
