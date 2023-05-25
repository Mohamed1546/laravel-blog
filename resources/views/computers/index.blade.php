@extends('layout')
@section('title','computers')
@section('content')
@if(Auth::check())
  <div class="row" style="width:80%;margin:auto;" >
    <a href="{{route('computers.create')}}" class="col-4 a"> اضافة منشور </a>
  </div>
  @endif<br><br>
  @if( count($computers)>0)
  @foreach($computers as $computer)
    <div class="container" style="border-bottom: 2px solid black;">
      <div class="row">
      <div class="col-4" style="text-align:left;"><img src="/images/{{$computer['image']}}" alt="image" style=" max-width: 300px;"></div>
        <div class="col-8" style="text-align:right;filter: drop-shadow(1px 1px 3px red);font-weight:bold;"><span><i class="fa-solid fa-sign-hanging"></i></span><h1>{{$computer['title']}}</h1><br><br><br><br><br>
        <a href="{{route('computers.show',[$computer['id']])}}" > قراءة المزيد </a><br><br>
        <i style="font-size:10px;text-align:left;">Written by  <span>{{ Auth::user() }}</span></i><br>
        <i style="font-size:10px;text-align:left;">Written at  <span>{{ $computer->updated_at }}</span></i></div>
      </div><br>
    </div><br>
  @endforeach
  @endif

@endsection
