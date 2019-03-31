@extends('mainlayout')
@section('content')
<div class="content-container">
  <div class="landing-header">
    <img class="search-image" src="{{ asset('images/landing.png') }}" alt="赤ちゃん Name"/>
    <div class="landing-header-text">
      <h1>赤ちゃん Name</h1>
      <p class="lead">子供の将来のために良い英語の名前を選びなさい</p>
      <a href="girl" class="btn btn-danger">女の子</a>
      <a href="boy" class="btn btn-primary">男の子</a>
    </div>
  </div>
</div>

  <!-- TO DO about why a good english name is important-->
@endsection
