{{-- Navigation --}}
<nav class="navbar navbar-default">
  <div class="container-fluid">
    {{-- Brand and toggle get grouped for better mobile display --}}
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target="#navbar-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ config('blog.name') }}</a>
    </div>

    {{-- Collect the nav links, forms, and other content for toggling --}}
    <div class="collapse navbar-collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li>
          <a href="/">Home</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/contact">Contact</a>
        </li>
          @if (Auth::guest())
          <li>
            <a href="/auth/login">Login</a>
          </li>
          @else
            <li class="dropdown ">
              <a href="/admin/post" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Hi {{ Auth::user()->name }}!
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li @if (Request::is('admin/post*')) class="active" @endif>
                  <a href="/admin/post">Posts</a>
                </li>
                <li role="separator" class="divider"></li>
                <li @if (Request::is('admin/tag*')) class="active" @endif>
                  <a href="/admin/tag">Tags</a>
                </li>
                <li role="separator" class="divider"></li>
                <li @if (Request::is('admin/upload*')) class="active" @endif>
                  <a href="/admin/upload">Uploads</a>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
      </ul>
    </div>
  </div>
</nav>


