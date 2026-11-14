<nav class="navbar navbar-expand-lg navbar-pastel sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/daftar/mahasiswa') }}">
            <span class="logo-titik"></span>Praktikum Laravel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuUtama" aria-controls="menuUtama"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuUtama">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('daftar/mahasiswa') ? 'active' : '' }}"
                       href="{{ url('/daftar/mahasiswa') }}">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kalkulator/segitiga') ? 'active' : '' }}"
                       href="{{ url('/kalkulator/segitiga') }}">Kalkulator Segitiga</a>
                </li>
            </ul>
        </div>
    </div>
</nav>