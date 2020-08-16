<div class="mediacenter">
  <i class="fa fa-times mediaclose"></i>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="mediacenter-uploader">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        {!! Form::open(['files'=>true, 'id' => 'uploaderform']) !!}
          <input type="file" id="image" name="image" class="dropify" />
          {!! Form::close() !!}
      </div><!-- col -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="progress progress-striped">
          <div class="progress-bar progress-bar-info prgs"><i>0%</i></div>
        </div>
        <div class="mediabtns">
          <input type="text" readonly class="form-control mediainput" >
          <button type="button" class="btn btn-rounded btn-success mediainsert">ادراج ملف</button>
          <button type="button" class="btn btn-rounded btn-info mediastart">بدأ التحميل</button>
          <span class="mediahint">بامكانك اضافة احدى الملفات بالضغط عليها</span>
        </div>
      </div><!-- col -->
    </div><!-- mediacenter-uploader -->
  </div><!-- col -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="mediacenter-images">
        <h3> مركز التحميل </h3>
        <div class="mediacenter-imagesco">
          <ul>
            @if(App\Media::count())
              @foreach(App\Media::all() as $media)
              <li><a class="mediaimg" href="#"><span>{{$media->ext}}</span><img src="{{UPLOAD}}/{{$media->url}}"></a></li>
              @endforeach
            @else
              <span class="mediahint"> لا توجد ملفات </span>
            @endif
          </ul>
        </div><!-- mediacenter-imagesco -->
      </div><!-- mediacenter-images -->
    </div><!-- col -->
</div><!-- mediacenter -->


<script>
  $(document).ready(function(){
    $('#image').on('change', function(){
      $('.mediastart').slideDown();
      $('.mediainsert').slideUp();
      $('.mediainput').slideUp().val('');
       $('.prgs').css('width', '0%').html('0%');
       $('.progress').slideUp();
    });

    $('.mediaclose').on('click', function(){
      $('.mediastart').slideUp();
      $('.mediainsert').slideUp();
      $('.mediainput').slideUp().val('');
       $('.prgs').css('width', '0%').html('0%');
       $('.progress').slideUp();
       $('.mediacenter').fadeOut();
    });

    $(document).on('click','.mediastart',function(){
      var updateForm =document.getElementById('uploaderform');
      var request = new XMLHttpRequest();

      var formData = new FormData(updateForm);
      request.open('post','{{url('')}}/uploader');
      request.send(formData);

      request.upload.addEventListener('progress', function(e){
         var percent = Math.round((e.loaded / e.total) * 100);
         $('.progress').slideDown();
          $('.prgs').css('width', percent+'%').html(percent+'%');


      }, false);

      request.addEventListener('load', function(e){
        var jsonResponse = e.target.responseText;
          if(jsonResponse.errors) {
              console.log(jsonResponse.errors);
          }
          else {
              //console.log(jsonResponse);
              var obj = JSON.parse(jsonResponse);
              if(obj.error == 1){
                return alert('صيغة الملف غير مدعومة')
              }
              $('.mediastart').slideUp();
              $('.mediainsert').slideDown();
              $('.mediainput').slideDown().val(obj.url);
               $('.prgs').css('width', '0%').html('0%');
               $('.progress').slideUp();
               $('.mediahint').hide();
               if(obj.error == 0){
                 $('.mediacenter-imagesco ul').append('<li><a class="mediaimg" href="#"><span>'+obj.ext+'</span><img src="'+obj.url+'"></a></li>');
               }
          }
        //console.log(e.target.responseText);
      }, false);


    });
  });
</script>
