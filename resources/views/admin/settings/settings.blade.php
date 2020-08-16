@extends(ADMIN.'.index')

@section('header')

<link href="{{ADMINSTYLE}}/assets/plugins/icheck/skins/all.css" rel="stylesheet">
<link href="{{ADMINSTYLE}}/assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">
<link href="{{ADMINSTYLE}}/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
@stop

@section('main')


<div class="card">
    <div class="card-block">
        {!! Form::open(['class' => 'floating-labels m-t-40', 'files'=> true]) !!}
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="sitename" required value="{{$set->sitename}}"><span class="bar"></span>
                <label for="input8">{{trans('admin.sitename')}}</label>
            </div>
            <div class="form-group m-b-40">
                <label class="clabel">{{trans('admin.sitelogo')}}</label>
                <input type="file" name="sitelogo" class="dropify" data-default-file="{{UPLOAD}}/{{$set->sitelogo}}" />
            </div>
            <div class="form-group m-b-40">
                <label class="clabel">خلفية الموقع</label>
                <input type="file" name="sitebg" class="dropify" data-default-file="{{UPLOAD}}/{{$set->sitebg}}" />
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="sitemail" required value="{{$set->sitemail}}"><span class="bar"></span>
                <label for="input9">{{trans('admin.sitemail')}}</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="tel" required value="{{$set->tel}}"><span class="bar"></span>
                <label for="input9">رقم الهاتف</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="phone" required value="{{$set->phone}}"><span class="bar"></span>
                <label for="input9">رقم الجوال</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="facebook" required value="{{$set->facebook}}"><span class="bar"></span>
                <label for="input9">رابط فيسبوك</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="twitter" required value="{{$set->twitter}}"><span class="bar"></span>
                <label for="input9">رابط تويتر</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="youtube" required value="{{$set->youtube}}"><span class="bar"></span>
                <label for="input9">رابط يوتيوب</label>
            </div>
            <div class="form-group m-b-40">
                <input type="text" class="form-control input-sm" name="instagram" required value="{{$set->instagram}}"><span class="bar"></span>
                <label for="input9">رابط انستغرام</label>
            </div>


            <div class="form-group row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                          <input type="text" name="location" class="form-control"readonly id="location" value="{{$set->location}}">
                          <input type="hidden" id="zmap" name="zmap" value="{{$set->zmap}}">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                          <input type="text" class="form-control" id="location_navigator" ><span class="bar"></span>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <br>
                          <button type="button" class="btn btn-effect-ripple btn-primary" id="mapzoomin"><i class="fa fa-plus-square"></i></button>
                          <button type="button" class="btn btn-effect-ripple btn-primary" id="mapzoomout"><i class="fa fa-minus-square"></i></button>
                      </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div id="map" class="gmap"></div>
                </div>
            </div><!--- Form-group ---->
            <div class="form-group m-b-40">
                <textarea  class="form-control input-sm" name="desc" required>{{$set->desc}}</textarea><span class="bar"></span>
                <label for="input9">{{trans('admin.desc')}} </label>
            </div>
            <div class="form-group m-b-40">
              <label class="clabel"> {{trans('admin.tags')}}</label>
                <div class="tags-default inputtags">
                  <input type="text" class="form-control  input-sm" name="tags" data-role="tagsinput" required value="{{$set->tags}}">
                </div>
            </div>

            <div class="form-group m-b-40 ">
                <label class="clabel">{{trans('admin.status')}}</label>
                <div class="radioblock">
                  <input type="radio" class="check" name="status" value="1" @if($set->status == 1) checked @endif> <span> يعمل </span>
                  <input type="radio" class="check" name="status" value="0" @if($set->status == 0) checked @endif> <span> لا يعمل </span>
                </div>
            </div>
            <div class="form-group m-b-40">
              <label class="clabel">رسالة الاغلاق</label>
                <textarea class="form-control input-sm ckeditor" name="cmsg" required >{{$set->cmsg}}</textarea>  <span class="bar"></span>
            </div>


            <div class="form-group ">
                <button type="submit" class="btn btn-primary">{{trans('admin.update')}}</button>
            </div>
        {!! Form::close() !!}
    </div>
</div>


@stop


@section('footer')
<script src="{{ADMINSTYLE}}/assets/plugins/ckeditor/ckeditor.js"></script>
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.min.js"></script>
<script src="{{ADMINSTYLE}}//assets/plugins/icheck/icheck.init.js"></script>
<script src="{{ADMINSTYLE}}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<script src="{{ADMINSTYLE}}/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>

<script src="http://maps.googleapis.com/maps/api/js?language=ar&key=AIzaSyDYCOjU3qJ1iH406Or6DyzOimOCcudQZho&libraries=places"></script>
<script>
	var cord, map, vmap;
  @if("{{$set->location}}" != '')
      vmap = "{{$set->location}}";
      vmap = vmap.split(',');
      vmap = {lat: vmap[0], lng: vmap[1]};
      cord = new google.maps.LatLng(vmap.lat,vmap.lng);
      map = new google.maps.Map(document.getElementById('map'), {
        center: cord,
        zoom: Number("{{$set->zmap}}"),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      });
    @else
  	cord = new google.maps.LatLng( 23.2413,44.1210);
    map = new google.maps.Map(document.getElementById('map'), {
      center: cord,
      zoom: 5,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    @endif

  // Create the search box and link it to the UI element.
  var input = document.getElementById('location_navigator');
  var searchBox = new google.maps.places.SearchBox(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });
  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();
    if (places.length == 0) {
      return;
    }
    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];
    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        title: place.name,
        position: place.geometry.location
      }));
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
      var loc = place.geometry.location;
      latlng = String(loc);
  		var point = latlng.match( /-?\d+\.\d+/g );
  		$('#location').val(point);
    });
    map.fitBounds(bounds);
  });
	google.maps.event.addListener(map, 'zoom_changed', function(event) {
		//console.log(map.getZoom())
		$('#zmap').val(map.getZoom());
	  });
	google.maps.event.addListener(map, 'click', function(event) {
		var loc = event.latLng;
    console.log(loc);
		latlng = String(loc);
		var point = latlng.match( /-?\d+\.\d+/g );
		$('#location').val(point);
      ozoom = map.getZoom();
      $('#zmap').val(ozoom);
	  });
    var ozoom;
    $('#mapzoomin').on('click', function(){
      ozoom = map.getZoom();
      map.setZoom(ozoom+1);
      $('#zmap').val(ozoom+1);
    });
    $('#mapzoomout').on('click', function(){
      ozoom = map.getZoom();
      map.setZoom(ozoom-1)
      $('#zmap').val(ozoom+1);
    });



</script>
@stop
