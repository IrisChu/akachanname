@extends('mainlayout')
@section('content')
  <div id="landing-container">
    <img class="background-image" src="{{ asset('images/landing.png') }}" alt="赤ちゃん Name"/>
    <div class="landing-header-text">
      <img id="landing-logo" src="{{ asset('images/logo.png') }}" alt="赤ちゃん Name"/>
      <p class="lead">子供の将来のために良い英語の名前を選びなさい</p>
      <a href="girl" class="button girl">女の子</a>
      <a href="boy" class="button boy">男の子</a>
    </div>
  </div>
  <!-- TO DO about why a good english name is important-->
@endsection
