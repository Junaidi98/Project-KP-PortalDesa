@yield('header')

<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('templateFE/') }}/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="#home">Beranda</a></li>
                    <li><a class="nav-link" href="#about">Tentang Portal</a></li>
                    <li><a class="nav-link" href="#services">Portal Desa</a></li>
                    <li><a class="nav-link" href="#team">Pejabat</a></li>
                    <li><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
