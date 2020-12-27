<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content=" 2017 © YEAR SOLUTIONS ">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/assets//images/favicon.png')}}">
    <title>{{$set->sitename}} @if(isset($title)) :: {{$title}} @endif</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('style/assets//plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/assets//plugins/bootstrap-rtl-master/dist/css/custom-bootstrap-rtl.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/main.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('style/css/colors/red.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="">
            <div class="login-box card">
            <div class="card-block">
                  @include(ADMIN.'.inc.errors')
                  {!! Form::open(['class' => 'form-horizontal form-material','id' => 'loginform']) !!}
                    <h3 class="box-title m-b-20">{{$title}}</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="{{trans('admin.password')}}"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" autocomplete="off" name="password_confirmation" required="" placeholder="{{trans('admin.rpassword')}}"> </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-purple btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{trans('admin.change')}}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}



            </div>
          </div>
        </div>

    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('style/assets//plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('style/assets//plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{asset('style/assets//plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('style/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('style/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('style/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('style/assets//plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('style/js/custom.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('style/assets//plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
