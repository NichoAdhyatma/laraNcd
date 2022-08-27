<nav class="navbar navbar-expand-lg navbar-light p-2 fixed-top bg-light">
    <div class="container-fluid gap-5">
        <a class="navbar-brand ps-3" href="/">Nicoding</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><i
                            class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about"><i
                            class="bi bi-file-person-fill"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita') ? 'active' : '' }}" href="/berita"><i
                            class="bi bi-postcard-fill"></i> Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories"><i
                            class="bi bi-tags-fill"></i> Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav fw-bolder">
                @auth
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle btn btn- btn-outline-dark" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="bi bi-person-circle me-1"></i> Welcome back ,
                                {{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-window-reverse me-2"></i>Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left me-2"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><i class="bi bi-box-arrow-in-right me-2"></i>Login / Register</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login"></i>Login</a>
                        <a class="dropdown-item" href="/register">Register</a>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
