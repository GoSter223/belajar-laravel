<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Alif Blog</a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
          aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi">
            <use xlink:href="#search" />
          </svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>
    <div id="navbarSearch" class="navbar-search w-100 d-flex justify-content-between">
    <form class="d-flex" role="search" style="width: 92.2%">
        <input class="form-control rounded-0 border-0" type="input" placeholder="Search" aria-label="Search">
      </form>
      <form action="/logout" method="POST" class="border-start">
        @csrf
        <button style="height: 100%; padding-bottom: 11px" type="submit" class="text-secondary-emphasis btn rounded-0 btn-dark">Logout <i class="bi bi-box-arrow-right"></i></button>
      </form>
    </div>
  </header>