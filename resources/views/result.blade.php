@extends('mainlayout')
@section('content')
<div class="content-container result-container">
  <img class="result-image" src="{{ asset('images/classroom.png') }}" alt="no logo">
  <div class="result @if($type == 'girl')result-girl @else result-boy @endif">
    <span class="result-text-bigger">Hello!</span>
    <p class="result-text">My name is... <p>
    <hr>
    <h1 class="result-text-bigger">{{$name->name}}</h1>
    <p class="result-text">{{$name->pronunciation}}<p>
  </div>
</div>
@endsection
