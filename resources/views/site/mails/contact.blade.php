<style>
    .inner-body {
          direction: rtl;
      }
      .subcopy p{
        text-align: right !important;
        direction: ltr !important;
      }
</style>
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => url('/') ])
            {{$set->sitename}}
        @endcomponent
    @endslot

    {{-- Body --}}

    <table border="0">
      <tr>
        <td>{{trans('site.name')}} : </td>
        <td>{{$data['name']}}</td>
      </tr>
      <tr>
        <td>{{trans('site.email')}} : </td>
        <td>{{$data['email']}}</td>
      </tr>
      <tr>
        <td>{{trans('site.phone')}} : </td>
        <td>{{$data['phone']}}</td>
      </tr>
      <tr>
        <td>{{trans('site.msgtitle')}} : </td>
        <td>{{$data['subject']}}</td>
      </tr>
      <tr>
        <td colspan="2">{{$data['message']}}</td>
      </tr>
    </table>

    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
            {{date('d-m-Y h:i:s A')}}
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
          {{trans('site.copy')}}  {{$set->sitename}}
        @endcomponent
    @endslot
@endcomponent
