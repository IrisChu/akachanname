@extends('mainlayout')
@section('content')
<div class="content-container">
  <div class="search-header">
    <img class="search-image" src="{{ asset('images/search' .$type. '.png') }}" alt="no logo">
    <h1 class="search-header-text">何が大切ですか？</h1>
  </div>
  <div class="search-group">
    <a href="result\{{$type}}\smart" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>利口</h4> <!--りこう; clever; smart; sharp; well-behaved-->
      <span class="glyphicon glyphicon-education"></span>
    </a>
    <a href="result\{{$type}}\genki" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>元気</h4><!-- げんき; full of spirit; energetic; genki-->
      <span class="glyphicon glyphicon-flash"></span>
    </a>
    <a href="result\{{$type}}\respect" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>尊敬</h4><!--そんけい; respect; honor-->
      <span class="glyphicon glyphicon-user"></span>
    </a>
    <a href="result\{{$type}}\reliable" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>しっかり</h4><!--reliable; hard working; dependable-->
      <span class="glyphicon glyphicon-link"></span>
    </a>
    <a href="result\{{$type}}\kind" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>親切</h4><!--しんせつ; kind; gentle-->
      <span class="glyphicon glyphicon-heart"></span>
    </a>
    <a href="result\{{$type}}\beauty" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>美</h4><!--び; beauty-->
      <span class="glyphicon glyphicon-eye-open"></span>
    </a>
  </div>
</div>
@endsection
