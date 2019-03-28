@extends('mainlayout')
@section('content')
<div class="content-container">
  <div class="search-header">
    <h1 class="search-header-text">何が大切ですか？</h1>
    <img class="search-image" src="{{ asset('images/search' .$type. '.jpg') }}" alt="no logo">
  </div>
  <div class="search-group">
    <a href="{{$type}}\利口" class="search-icon">
      <h4>利口</h4> <!--りこう; clever; smart; sharp; well-behaved-->
      <span class="glyphicon glyphicon-education @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
    <a href="{{$type}}\元気" class="search-icon">
      <h4>元気</h4><!-- げんき; full of spirit; energetic; healthy-->
      <span class="glyphicon glyphicon-flash @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
    <a href="{{$type}}\尊敬" class="search-icon">
      <h4>尊敬</h4><!--respectful-->
      <span class="glyphicon glyphicon-user @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
    <a href="{{$type}}\尊敬" class="search-icon">
      <h4>しっかり</h4><!--reliable; hard working; dependable-->
      <span class="glyphicon glyphicon-link @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
    <a href="{{$type}}\親切" class="search-icon">
      <h4>親切</h4><!--しんせつ; kind; gentle-->
      <span class="glyphicon glyphicon-heart @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
    <a href="{{$type}}\美" class="search-icon">
      <h4>美</h4><!--び; beauty-->
      <span class="glyphicon glyphicon-eye-open @if($type == 'girl')search-girl @else search-boy @endif"></span>
    </a>
  </div>
</div>
@endsection
