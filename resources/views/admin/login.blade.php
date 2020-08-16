<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content=" 2017 © YEAR SOLUTIONS ">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ADMINSTYLE}}/assets//images/favicon.png">
    <title>{{$set->sitename}} @if(isset($title)) :: {{$title}} @endif</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ADMINSTYLE}}/assets//plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ADMINSTYLE}}/assets//plugins/bootstrap-rtl-master/dist/css/custom-bootstrap-rtl.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ADMINSTYLE}}/css/style.css" rel="stylesheet">
    <link href="{{ADMINSTYLE}}/css/main.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ADMINSTYLE}}/css/colors/red.css" id="theme" rel="stylesheet">
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
                    <h3 class="box-title m-b-20">تسجيل دخول</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" required="" placeholder="البريد الالكترونى"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" autocomplete="off" name="password" required="" placeholder="كلمة المرور"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" name="remember" type="checkbox">
                                <label for="checkbox-signup"> تذكرنى </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> هل نسيت كلمة المرور ؟</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-purple btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">تسجيل دخول</button>
                        </div>
                    </div>
                    {!! Form::close() !!}


                  {!! Form::open(['method' => 'POST', 'url' => 'admin/remember', 'class' => 'form-horizontal ','id' => 'recoverform']) !!}
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3><i class="backbtn ti-angle-right "></i> استعادة كلمة المرور </h3>
                            <p class="text-muted">ادخل البريد الالكترونى </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" required="" placeholder="البريد الالكترونى"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-purple btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">استعادة</button>
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
    <script src="{{ADMINSTYLE}}/assets//plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ADMINSTYLE}}/assets//plugins/bootstrap/js/tether.min.js"></script>
    <script src="{{ADMINSTYLE}}/assets//plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ADMINSTYLE}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{ADMINSTYLE}}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ADMINSTYLE}}/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{ADMINSTYLE}}/assets//plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ADMINSTYLE}}/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ADMINSTYLE}}/assets//plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
