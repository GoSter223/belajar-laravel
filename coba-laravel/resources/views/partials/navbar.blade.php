<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">GoSther</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
          <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="{{ route('posts') }}">Blog</a>
        </div>
      </div>
    </div>
  </nav>