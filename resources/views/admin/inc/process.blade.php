@foreach($frontRows as $item)
  <td>




    @if($item == 'uid')
    {!! @App\User::find($result->uid)->name !!}
    @elseif($item == 'vcat_id')
    {!! @App\VCat::find($result->vcat_id)->title !!}
    @elseif($item == 'adminname')
      {{$result->name}}
    @elseif($item == 'images')
      @if(count(json_decode($result->images)))
      {!! count(json_decode($result->images)) !!}
      @else
      0
      @endif
    @elseif($item == 'created_at')
      {!! @$result->created_at->diffForHumans() !!}
    @elseif($item == 'dcat_id')
      {!! @App\CDownloads::find($result->cat_id)->title !!}
    @elseif($item == 'qcat_id')
      {!! @App\Cques::find($result->qcat_id)->qcatname !!}
    @elseif($item == 'countery_id')
      {!! @App\Counteries::find($result->countery_id)->counteryname !!}
    @elseif($item == 'ext')
      <a class="btn btn-rounded btn-success" style="color:#fff" target="_blank">{{strtoupper($result->ext)}}</a>
    @elseif($item == 'url')
      <a href="{{UPLOAD}}/{{$result->url}}" class="btn btn-rounded btn-info" target="_blank"><i class="fa fa-link"></i></a>
    @elseif($item == 'file')
      <a href="{{$result->file}}" class="btn btn-rounded btn-info" target="_blank"><i class="fa fa-link"></i></a>
    @elseif($item == 'linkurl')
      <a href="{{url('')}}/link-{{$result->id}}" class="btn btn-rounded btn-info" target="_blank"><i class="fa fa-link"></i></a>
    @elseif($item == 'image1')
      <a href="{{UPLOAD}}/{{$result->image1}}" target="_blank"><img class="img-circle" src="{{UPLOAD}}/{{$result->image1}}" alt=""></a>
    @elseif($item == 'image')
      <a href="{{UPLOAD}}/{{$result->image}}" target="_blank"><img class="img-circle" src="{{UPLOAD}}/{{$result->image}}" alt=""></a>
    @elseif($item == 'active' || $item == 'foot' || $item == 'nav')
      @if($result->$item)
        <a href="{{url('')}}/admin/toggle/{{$item}}/{{$parentroute}}/{{$result->id}}" class="btn btn-rounded btn-success"><i class="fa fa-check"></i></a>
      @else
        <a href="{{url('')}}/admin/toggle/{{$item}}/{{$parentroute}}/{{$result->id}}" class="btn btn-rounded btn-danger"><i class="fa fa-times"></i></a>
      @endif
    @else
    {{$result->$item}}
    @endif
  </td>
@endforeach
