<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$set->sitename}} @if(isset($title)) :: {{$title}} @endif</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$set->desc}}" />
    <meta name="keywords" content="{{$set->tags}}" />
    <link rel="stylesheet" href="{{THEME}}/include/css/bootstrap.css">
    <link rel="stylesheet" href="{{THEME}}/include/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{THEME}}/include/css/normalize.css">
    <link rel="stylesheet" href="{{THEME}}/include/js/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="{{THEME}}/include/js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{THEME}}/include/css/style.css">
</head>

<body style="background-image:url('{{UPLOAD.'/'.$set->sitebg}}')">

    <header>
      <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="logo">
              <a href="{{url('')}}" title="{{$set->sitename}}"><img src="{{UPLOAD}}/{{$set->sitelogo}}" alt="{{$set->sitename}}"></a>
          </div><!-- logo -->
        </div><!-- col -->
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="social">
            <a href="{{$set->facebook}}"><i class="fa fa-facebook"></i></a>
            <a href="{{$set->twitter}}"><i class="fa fa-twitter"></i></a>
            <a href="{{$set->youtube}}"><i class="fa fa-youtube"></i></a>
            <a href="{{$set->instagram}}"><i class="fa fa-instagram"></i></a>
          </div><!-- social -->
        </div><!-- col -->
      </div><!-- continer -->
    </header>
