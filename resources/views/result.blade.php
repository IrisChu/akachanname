@extends('mainlayout')
@section('content')
<div class="content-container result-header-container">
  <div class="result-header @if($type == 'girl')result-header-girl @else result-header-boy @endif">
    <h1 class="result-header-text">Hello! <br> My name is...</h1>
    
  </div>
  <img class="result-image" src="{{ asset('images/classroom.jpg') }}" alt="no logo">
</div>
@endsection
