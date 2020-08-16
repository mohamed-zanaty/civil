@extends('site.index')

@section('main')

    <section>
      <div class="container">
          <div class="contactpage">
            <h3 class="mtitle"> اتصل بنا </h3>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              @include('site.inc.error')
              <div class="contactaddr">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="contactaddrr">
                    <a href="#"><i class="fa fa-mobile"></i> <span> {{$set->phone}} </span></a>
                    <a href="#"><i class="fa fa-phone"></i> <span> {{$set->tel}} </span></a>
                    <a href="#"><i class="fa fa-envelope "></i> <span> {{$set->sitemail}} </span></a>
                  </div><!-- contactaddrr -->
                </div><!-- col -->
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <div class="maplocation" id="googleMap"></div><!-- maplocation -->
                </div><!-- col -->
              </div><!-- contactaddr -->
            </div><!-- col -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              {!! Form::open() !!}
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactitem">
                  <input type="text" placeholder="الأسم" name="name" required>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactitem">
                  <input type="text" placeholder="البريد الالكترونى"  name="email" required>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactitem">
                  <input type="text" placeholder="رقم الجوال" name="phone" required>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactitem">
                  <input type="text" placeholder="عنوان الرسالة" name="subject" required>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contactitem">
                  <textarea name="message" placeholder="الرسالة" required></textarea>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contactitem">
                  <button type="submit"><i class="fa fa-send"></i> ارسال </button>
                </div><!-- col -->
              {!! Form::close() !!}
            </div><!-- col -->

          </div><!-- contactpage -->
        </div><!-- continer -->
    </section>

@endsection

@section('footer')
<script src="http://maps.googleapis.com/maps/api/js?language=ar&key=AIzaSyDYCOjU3qJ1iH406Or6DyzOimOCcudQZho&libraries=places&callback=initAutocomplete"></script>
<script>
	var map;
	var myLatLng = {lat: 23.2413, lng: 44.1210};
	var infowindow = new google.maps.InfoWindow({maxWidth:350});

	var mapProp = {
	  center:myLatLng,
	  zoom:9,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
	});

	var vmap = "{{$set->location}}";
	vmap = vmap.split(',');
	vmap = {lat: vmap[0], lng: vmap[1]};
	var zoom = "{{$set->zmap}}";
	latlng = new google.maps.LatLng(vmap.lat,vmap.lng);
  marker.setPosition(latlng);
	map.setCenter(latlng);
	map.setZoom(Number(zoom));

</script>
@endsection
