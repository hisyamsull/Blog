  <a class="navbar-brand" href="/">My-Blog</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-light" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link {{($title === "home")? 'active' : ''}}" href="/">Home</a>
      <a class="nav-link {{($title === "about")? 'active' : ''}}" href="/about">About</a>
      <a class="nav-link {{($title === "posts")? 'active' : ''}}" href="/posts">Blog</a>
      <a class="nav-link {{($title === "categories")? 'active' : ''}}" href="/categories">Categories</a>
    </div>
  </div>

