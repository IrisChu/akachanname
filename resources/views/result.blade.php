@extends('mainlayout')
@section('content')
<div class="result-container">
  <img class="result-image" src="{{ asset('images/classroom.jpg') }}" alt="no logo">

  <div class="result @if($type == 'girl')result-girl @else result-boy @endif">
    <span class="result-text-bigger">Hello!</span>
    <p class="result-text">My name is... <p>
    <hr>
    @foreach ($names as $name)
    <h1 class="result-text-bigger">{{$name}}</h1>
    @endforeach
  </div>
</div>
@endsection
