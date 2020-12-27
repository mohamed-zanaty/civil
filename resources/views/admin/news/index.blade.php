@extends(ADMIN.'.index')

@section('header')
<link href="{{asset('style/assets/plugins/icheck/skins/all.css')}}" rel="stylesheet">
@stop


@section('main')

<div class="card">
    <div class="card-block">
        <div class="table-responsive">
          {!! Form::open(['class' => 'form-horizontal form-bordered', 'url' => 'admin/' .$parentroute. '/deletelist']) !!}
            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                <thead>
                    <tr>
                       <th width="5%"></th>
                        <th width="5%">#</th>
                        @foreach($frontRows as $item)
                          <th>{{trans('admin.'.$item)}}</th>
                        @endforeach
                        <th width="10%">{{trans('admin.actions')}}</th>
                    </tr>
                </thead>
                <tbody>
                  @if(count($results))
                  @foreach($results as $number => $result)
                    <tr >
                        <td>
                            <input type="checkbox" class="check" name="id[]" value="{{$result->id}}">
                        </td>
                        <td>{!! ++$number !!}</td>
                        @include(ADMIN.'.inc.process')
                        <td>
                            <a href="{{$parentroute}}/{{$result->id}}/edit" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="{{trans('admin.edit')}}"><i class=" ti-pencil-alt " aria-hidden="true"></i></a>
                            <a onClick="return confirm('{{trans('admin.itemdel')}}')" href="{{$parentroute}}/{{$result->id}}/delete" type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="{{trans('admin.delete')}}"><i class="ti-close" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach
                 @else
                 <tr>
                   <td colspan="{!! count($frontRows) + 3 !!}" align="center">{{trans('admin.norows')}}</td>
                 </tr>
                 @endif

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="{!! (count($frontRows) + 3) / 2 !!}">
                            <button type="submit" onClick="return confirm('{{trans('admin.checkeddel')}}')" class="btn btn-info btn-rounded maindelbtn">{{trans('admin.delete')}}</button>
                        </td>

                        <td colspan="{!! (count($frontRows) + 3) / 2  !!}">
                            <div class="text-right">
                                {!! $results->links() !!}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@stop

@section('footer')
<script src="{{asset('style/assets/plugins/icheck/icheck.min.js')}}"></script>
<script src="{{asset('style/assets/plugins/icheck/icheck.init.js')}}"></script>
@stop
