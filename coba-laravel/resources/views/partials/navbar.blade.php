<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">GoSther</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
          <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="{{ route('posts') }}">Blog</a>
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="{{ route('categories') }}">Categories</a>
        </div>
        <div class="navbar-nav ms-auto">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </div>
      </div>
    </div>
  </nav>