<header class="l-main-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ $uri->path() }}">
                <img src="{{ $asset->path('images/logo-cw-h.svg') }}"
                    alt="LOGO"
                    style="height: 25px;"
                />
            </a>
            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{ $uri->path('design-system.html') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ $uri->path() }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ $uri->path('article/article.html') }}">
                            Article
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    {{--  Right Menu  --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
