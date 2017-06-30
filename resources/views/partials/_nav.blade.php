
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="\">CRUD App</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">HOME</a></li>
        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">BLOG</a></li>
    </div>
  </div>
</nav>
