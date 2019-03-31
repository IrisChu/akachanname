@extends('mainlayout')
@section('content')
<div class="content-container">
  <div class="search-header">
    <h1 class="search-header-text">何が大切ですか？</h1>
    <img class="search-image" src="{{ asset('images/search' .$type. '.png') }}" alt="no logo">
  </div>
  <div class="search-group">
    <a href="result\{{$type}}\利口" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>利口</h4> <!--りこう; clever; smart; sharp; well-behaved-->
      <span class="glyphicon glyphicon-education"></span>
    </a>
    <a href="result\{{$type}}\元気" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>元気</h4><!-- げんき; full of spirit; energetic; healthy-->
      <span class="glyphicon glyphicon-flash"></span>
    </a>
    <a href="result\{{$type}}\尊敬" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>尊敬</h4><!--respectful-->
      <span class="glyphicon glyphicon-user"></span>
    </a>
    <a href="result\{{$type}}\しっかり" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>しっかり</h4><!--reliable; hard working; dependable-->
      <span class="glyphicon glyphicon-link"></span>
    </a>
    <a href="result\{{$type}}\親切" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>親切</h4><!--しんせつ; kind; gentle-->
      <span class="glyphicon glyphicon-heart"></span>
    </a>
    <a href="result\{{$type}}\美" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>美</h4><!--び; beauty-->
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
  </div>
</div>
@endsection
