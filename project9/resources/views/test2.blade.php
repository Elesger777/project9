@extends('dizayn.app')

@section('title')
 TEST2
@endsection

@section('test2')

<h2>Test2</h2>


@foreach($errors->all() as $sehv)
  {{$sehv}}<br>
@endforeach<br>

@isset($sil_id)
  Melumati silmeye eminsizmi?<br>
  <a href="{{route('delete', $info->id)}}"><button>He</button></a>
  <a href="{{route('test')}}"><button>Yox</button><br>
@endisset<br>

@if(session('mesaj'))
  {{session('mesaj')}}<br>
@endif<br>

<form method="post" action="{{route('daxilet2')}}">
@csrf
Ish yeri<br>
<input type="text" name="ish"><br>
<button type="submit">Daxil et</button>
</form><br>

Bazada {{$tsay2}} qeydiiyat var<br><br>

@foreach($data as $i=>$info)
  #{{$i+1}}<br>
  <b>Ish:</b> {{$info->ish}}<br>
  <br>
@endforeach

@endsection