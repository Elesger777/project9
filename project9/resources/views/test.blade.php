@extends('dizayn.app')

@section('title')
 TEST
@endsection

@section('test')
<h2>Test</h2>

@foreach($errors->all() as $sehv)
   {{$sehv}}<br>
@endforeach<br>

@isset($sil_id)
  Melumati silmeye eminsizmi?<br>
  <a href="{{route('delete', $sil_id)}}"><button>He</button></a>
  <a href="{{route('test')}}"><button>Yox</button></a><br>
@endisset<br>

@if(session('mesaj'))
  {{session('mesaj')}}<br>
@endif<br>

<form method="post" action="{{route('daxilet')}}">
@csrf
Ad:<br>
<input type="text" name="ad"><br>
Soyad:<br>
<input type="text" name="soyad"><br>
<button type="submit">Daxil et</button>
</form><br>

Bazada {{$tsay}} qeydiyyat var<br><br>

@foreach($data as $i=>$info)
  #{{$i+1}}<br>
  <b>Ad:</b> {{$info->ad}}<br>
  <b>Soyad:</b> {{$info->soyad}}<br>
  <a href="{{route('sil', $info->id)}}"><button>Sil</button></a><br><br>
@endforeach


@endsection
