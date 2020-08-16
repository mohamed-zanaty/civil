@if( Session::get('success') )
<div role="alert" class="alert alert-success alert-dismissible fade in text-right">
   <span class="close" data-dismiss="alert">&times;</span>
    {{Session::get('success')}}
    {{Session::forget('success')}}
</div>
@endif
@if( Session::get('fails') )
<div role="alert" class="alert alert-danger alert-dismissible fade in text-right">
   <span class="close" data-dismiss="alert">&times;</span>
    {{Session::get('fails')}}
    {{Session::forget('fails')}}
</div>
@endif
@if($errors->any())
  {!! implode('', $errors->all('<div role="alert" class="alert alert-danger alert-dismissible fade in"><span class="close" data-dismiss="alert">&times;</span><p>:message</p></div>')) !!}
@endif
