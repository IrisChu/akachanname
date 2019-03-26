<nav class="navbar navbar-default navbar-static-top">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link  @if($type == 'abc')active @endif" href="/abc">ABC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($type == 'girl')active @endif" href="/girl">女の子</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($type == 'boy')active @endif" href="/boy">男の子</a>
        </li>
      </ul>
  </nav>
