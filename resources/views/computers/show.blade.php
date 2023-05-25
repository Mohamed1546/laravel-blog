@extends('layout')
@section('title',' عرض البيانات ')
@section('content')
<div  style="width:90%;margin:auto;"><br>
      <h1 style="color:chocolate">{{$computer['title']}} </h1><br><br>
      <h3 style="text-align:right;">{{$computer['subject']}}</h3><br>
      <img src="/images/{{$computer['image']}}" alt="image" style="max-width:500px;"><br><br>
      @if(Auth::user())
      <div class="row">
        <div class="col-7"></div>
        <div class="col-4" style="display:flex;">
          <a class="at1" href="{{route('computers.edit' , [$computer->id])}}" > تعديل </a>
          <form action="{{route('computers.destroy' , [$computer->id])}}" method="post" >
            @csrf
            @method('DELETE')
            <input type="submit" name="submit" value=" حذف " class="ad2">
          </form>
        </div>
      </div>
      @endif
      <br>
</div>
@endsection
