<header class=" py-4 px-3 navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <nav class=" navbar fixed-top navbar-expand-lg" style="background-color: #149A9B">
        <div class="container-fluid">
          <img class="image" src="../../assets/NC_logolight.png" width="42px" style="margin: 1px;">
          <img class="image" src="../../assets/NC_namelight.png"  width="10%" height="5%" style="margin: 2px;"> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kelas</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                  </li>
              <li>
                <form action="{{ route('auth.logout') }}" method="post"
                  onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-secondary">Logout</button>
                </form>
                {{-- <a class="btn btn-secondary ms-1 me-4 " href="register" role="button">Logout</a> --}}
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      {{-- <a class="   py-3 px-3 " href="">Absensi App</a> --}}
</header>
