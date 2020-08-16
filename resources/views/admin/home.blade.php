  @extends(ADMIN.'.index')

@section('header')
<link href="0/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
@stop

@section('main')


<div class="row">

  <!-- Column -->
  <div class="col-md-6 col-lg-6 col-xlg-6">
      <div class="card card-primary card-inverse">
          <div class="box text-center">
            <h1 class="font-light text-white">{!! App\Admin::count() !!}</h1>
              <h6 class="text-white">المديرين</h6>
          </div>
      </div>
  </div>
  <!-- Column -->
  <div class="col-md-6 col-lg-6 col-xlg-6">
      <div class="card card-inverse card-warning">
          <div class="box text-center">
            <h1 class="font-light text-white">{!! App\Contact::count() !!}</h1>
              <h6 class="text-white">الرسائل</h6>
          </div>
      </div>
  </div>
</div>
<!-- Row -->
<!-- Row -->
        <div class="row">

<div class="col-lg-6 col-md-6">
    <div class="card">
        <div class="card-block">

          <div class="homelogo">
            <div class="homeimg">
              <img src="{{UPLOAD}}/{{$set->sitelogo}}" alt="{{$set->sitename}}">
            </div>
            <h3>{{$set->sitename}}</h3>
          </div>

        </div>
        <div>
            <hr>
        </div>
        <div class="card-block">

            <ul class="list-icons d-flex flex-item text-center p-t-10">
                <li class="col"><a href="{{$set->facebook}}" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook-square font-20"></i></a></li>
                <li class="col"><a href="{{$set->twitter}}" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fa fa-twitter font-20"></i></a></li>
                <li class="col"><a href="{{$set->youtube}}" data-toggle="tooltip" title="" data-original-title="Youtube"><i class="fa fa-youtube font-20"></i></a></li>
                <li class="col"><a href="{{$set->instagram}}" data-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram font-20"></i></a></li>
            </ul>
        </div>
    </div>
</div>



<div class="col-lg-6 col-md-6">
            <div class="row">


            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block ">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light"> @if($set->status == 0) لا يعمل @else يعمل @endif</h1>
                            <h6 class="text-muted"> حالة الموقع  </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-primary css-bar-100"><i class="mdi mdi-lock"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block ">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">{{$set->visits}}</h1>
                            <h6 class="text-muted"> عدد المشاهدات </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-primary css-bar-100"><i class="mdi mdi-eye"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">{!! App\Contact::count() !!}</h1>
                            <h6 class="text-muted"> السلايدر  </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-primary css-bar-100"><i class="mdi mdi-animation"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                          <h1 class="font-light">{!! App\Contact::count() !!}</h1>
                            <h6 class="text-muted"> المشاريع  </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-info css-bar-100"><i class="mdi mdi-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                          <h1 class="font-light">{!! App\Contact::count() !!}</h1>
                            <h6 class="text-muted"> الاخبار  </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-danger css-bar-100"><i class="mdi mdi-newspaper"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-6">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                          <h1 class="font-light">{!! App\Contact::count() !!}</h1>
                            <h6 class="text-muted">  البومات الصور  </h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="100%" class="css-bar m-b-0 css-bar-warning css-bar-100"><i class="mdi mdi-folder-multiple-image"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Row -->

@stop

@section('footer')

@stop
