
    <nav>
      <div class="container">
        <div class="nav1">
          <ul>
            <li><a href="{{url('/')}}" @if(Request::segment(1) == '') class="snav" @endif><i class="fa fa-home"></i> <span> الرئيسية </span> </a></li>
            <li><a href="{{url('news')}}" @if(Request::segment(1) == 'news') class="snav" @endif><i class="fa fa-newspaper-o "></i> <span> الأخبار </span> </a></li>
            <li><a href="{{url('programs')}}" @if(Request::segment(1) == 'programs') class="snav" @endif><i class="fa fa-star"></i> <span> البرامج </span> </a></li>
            <li><a href="{{url('download')}}" @if(preg_match('/^download/' , Request::segment(1))) class="snav" @endif><i class="fa fa-cloud-download"></i> <span> مركز التحميل </span> </a></li>
            <li><a href="{{url('gpa')}}" @if(Request::segment(1) == 'gpa') class="snav" @endif><i class="fa fa-calculator "></i> <span> GPA </span> </a></li>
            <li><a href="{{url('gallary')}}" @if(Request::segment(1) == 'gallary') class="snav" @endif><i class="fa fa-picture-o"></i> <span> معرض الصور </span> </a></li>
            <li><a href="{{url('about-us')}}" @if(Request::segment(1) == 'about-us') class="snav" @endif><i class="fa fa-question "></i> <span> من نحن </span> </a></li>
            <li><a href="{{url('contact-us')}}" @if(Request::segment(1) == 'contact-us') class="snav" @endif><i class="fa fa-envelope-open"></i> <span> اتصل بنا </span> </a></li>
          </ul>
        </div><!-- nav1 -->
    </div><!-- continer -->
    </nav>

    <footer>
      <div class="container">
        <div class="copy">
          &copy; 2017 civilittee - All Rights Reserved.
        </div><!-- copy -->
        <div class="copy">
          جميع الحقوق محفوظة &copy; <a href="http://alfarisprojects.com/" target="_blank" style="color: rgb(153, 153, 153); font-family: dm;"> الفارس </a>
        </div><!-- copy -->

      </div><!-- continer -->
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('include/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('include/js/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('include/js/custom-owl.js')}}"></script>
    <script src="{{asset('include/js/gpa.js')}}"></script>
    <script src="{{asset('include/js/imageMapResizer.min.js')}}"></script>
    <script src="{{asset('include/js/script.js')}}"></script>
@yield('footer')
</body>

</html>
