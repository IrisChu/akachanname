@extends('mainlayout')
@section('content')
  <div class="search-header">
    <img class="background-image" src="{{ asset('images/search' .$type. '.png') }}" alt="no logo">
    <h1 class="search-header-text">何が大切ですか？</h1>
  </div>
  <div class="search-group">
    <a href="result\{{$type}}\smart" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>利口</h4> <!--りこう; clever; smart; sharp; well-behaved-->
      <i class="material-icons">menu_book</i>
    </a>
    <a href="result\{{$type}}\genki" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>元気</h4><!-- げんき; full of spirit; energetic; genki-->
      <i class="material-icons">wb_sunny</i>
    </a>
    <a href="result\{{$type}}\respect" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>尊敬</h4><!--そんけい; respect; honor-->
      <i class="material-icons">person</i>
    </a>
    <a href="result\{{$type}}\reliable" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>しっかり</h4><!--reliable; hard working; dependable-->
      <i class="material-icons">link</i>
    </a>
    <a href="result\{{$type}}\kind" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>親切</h4><!--しんせつ; kind; gentle-->
      <i class="material-icons">favorite</i>
    </a>
    <a href="result\{{$type}}\beauty" class="search-icon @if($type == 'girl')search-girl @else search-boy @endif">
      <h4>美</h4><!--び; beauty-->
      <i class="material-icons">sentiment_satisfied</i>
    </a>
  </div>
@endsection
