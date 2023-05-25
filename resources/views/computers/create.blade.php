@extends('layout')
@section('title',' اضافة منشورات ')
@section('content')
<center style="font-size:40px"> اضافة منشورات </center><br>
@if(Auth::check())

  <div style="margin-top:50px;width:80%;margin:auto;">
    <form action="{{route('computers.store')}}" method="post" style="text-align:left;" enctype="multipart/form-data">
      @csrf
      <h5> العنوان </h5><br>
      <input type="text" name="title" placeholder=" العنوان " value="{{old('title')}}" class="title"><br>
      @error('title')
        <p class="p">{{$message}}</p>
      @enderror
      <h5>  الموضوع </h5><br>
      <textarea type="textarea" name="subject" placeholder=" ادخل الموضوع  " value="{{old('subject')}}" class="subject"></textarea><br>
      @error('subject')
        <p class="p">{{$message}}</p>
      @enderror
      <h5> اضافة صور </h5>
      <label style="width:100%;background-color:white"><input type="file" name="image" value="{{old('image')}}" style="display:none;"> 
      <span> اضافة صور </span></label><br>
      @error('image')
        <p class="p">{{$message}}</p>
      @enderror
      <input type="submit" name="submit"  class="submit" value=" تاكيد ">
    </form>
  </div>

@endif
@if(!Auth::check())
  <h1> يرجاء تسجيل الدخول لتتمكن من اضافة منشورات </h1>
@endif
@endsection
