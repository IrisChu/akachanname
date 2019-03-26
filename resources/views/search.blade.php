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
    <span class="glyphicon glyphicon-education"></span>
  </a>
  <a href="{{$type}}\元気" class="search-icon">
    <h4>元気</h4><!-- げんき; full of spirit; energetic; healthy-->
    <span class="glyphicon glyphicon-flash"></span>
  </a>
  <a href="{{$type}}\立派" class="search-icon">
    <h4>立派</h4><!--りっぱ; praiseworthy; worthy; solid; elegant-->
    <span class="glyphicon glyphicon-star"></span>
  </a>
  <a href="{{$type}}\勇気" class="search-icon">
    <h4>勇気</h4><!--ゆうき; courageous-->
    <span class="glyphicon glyphicon-fire"></span>
  </a>
  <a href="{{$type}}\人情" class="search-icon">
    <h4>人情</h4><!--にんじょう; empthy; kindess; humanity; human nature; common sense-->
    <span class="glyphicon glyphicon-eye-open"></span>
  </a>
  <a href="{{$type}}\尊敬" class="search-icon">
    <h4>尊敬</h4><!--respectful-->
    <span class="glyphicon glyphicon-user"></span>
  </a>
  <a href="{{$type}}\ミュージカル" class="search-icon">
    <h4>ミュージカル</h4><!--musical-->
    <span class="glyphicon glyphicon-music"></span>
  </a>
  <a href="{{$type}}\親切" class="search-icon">
    <h4>親切</h4><!--しんせつ; kind; gentle-->
    <span class="glyphicon glyphicon-heart"></span>
  </a>
  <a href="{{$type}}\正直" class="search-icon">
    <h4>正直</h4><!--しょうじき; honest; frank; straightforward-->
    <span class="glyphicon glyphicon-record"></span>
  </a>
  <a href="{{$type}}\呑気" class="search-icon">
    <h4>呑気</h4><!--のんき; optimistic; carefree; easygoing-->
    <span class="glyphicon glyphicon-ice-lolly-tasted"></span>
  </a>
  <a href="{{$type}}\主体的" class="search-icon">
    <h4>主体的</h4><!--しゅたいてき;independent;responsible-->
    <span class="glyphicon glyphicon-time"></span>
  </a>
  <a href="{{$type}}\美" class="search-icon">
    <h4>美</h4><!--び; beauty-->
    <span class="glyphicon glyphicon-grain"></span>
  </a>
</div>
</div>
@endsection
