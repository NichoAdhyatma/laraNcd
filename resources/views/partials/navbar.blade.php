<nav class="navbar navbar-expand-lg navbar-light p-3 fixed-top bg-light">
    <div class="container-fluid gap-5">
        <a class="navbar-brand ps-3" href="/">Nicoding</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'home') ? 'active' : ''}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'about') ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'berita') ? 'active' : ''}}" href="/berita">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == 'categories') ? 'active' : ''}}" href="/categories">Categories</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

