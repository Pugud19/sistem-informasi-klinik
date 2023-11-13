<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fa fa-users menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/pengguna')}}">Data Pengguna</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/wilayah')}}">Data Wilayah</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard/obat')}}">Data Obat</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/tindakan')}}">
            <i class="fa fa-briefcase menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Paket Tindakan</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/data')}}">
            <i class="fa fa-ravelry menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Masa Aktif</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/todo')}}">
            <i class="icon-paper menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Daftar Kerjaan</span>
            </a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/documentation')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
        </ul>
      </nav>
