<div class="errordiv">
@if( Session::get('success') )
<div class="alert alert-success alert-rounded"> <p>{{Session::get('success')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
{{Session::forget('success')}}
@endif

@if( Session::get('fails'))
<div class="alert alert-danger alert-rounded">  <p>{{Session::get('fails')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
{{Session::forget('fails')}}
@endif

@if($errors->any())
  {!! implode('', $errors->all('<div class="alert alert-danger alert-rounded"><p>:message</p><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>')) !!}
@endif
</div>
