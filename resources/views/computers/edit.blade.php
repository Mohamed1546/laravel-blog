@extends('layout')
@section('title','edite data')
@section('content')
@if(Auth::check())
<div class="container"  style="margin-top:100px;">
  <h3 style="margin:auto auto;">edite computer</h3>
  <form action="{{route('computers.update' , ['computer' => $computer['id']])}}" method="post" enctype="multipart/form-data" style="text-align:left;">
    @csrf
    @method('PUT')
    <h5>Title</h5>
    <input type="text" name="title" value="{{$computer['title']}}" class="title"><br>
    @error('title')
      <p class="p">{{$message}}</p>
    @enderror
    <h5>subject</h5>
    <input type="text" name="subject" value="{{$computer['subject']}}" class="subject"><br>
    @error('subject')
      <p class="p">{{$message}}</p>
    @enderror
    <h5>image</h5>
    <input type="file" name="image" value="{{$computer['image']}}" ><br>
    @error('image')
      <p class="p">{{$message}}</p>
    @enderror
    <input type="submit" name="edit" value="update" class="submit">
  </form>
  <div class="row">
    <div class="col-8"></div>
    <a class="col-4 a" href="{{route('computers.show',[$computer['id']])}}"> الرجوع للمنشور </a>
  </div>
</div>
@endif
@endsection
