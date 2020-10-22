<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
       
    <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
      </div>
      <div id="navbar" class="navbar-collapse navbar ">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="{{url('/about')}}">About</a></li>
          <li><a href="{{url('/services')}}">Services</a></li>
          <li><a href="{{url('/posts')}}">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="/posts/create">Create Post</a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>