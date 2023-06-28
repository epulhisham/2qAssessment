<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container justify-content-start">
            <a class="navbar-brand" href="/mainpage">
                2qCompanies
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container-fluid justify-content-end" id="navbarCollapse">
                <div class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="border-0 bg-white mx-2">Log out</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>