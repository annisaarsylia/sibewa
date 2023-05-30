<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">Beasiswa.id</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/">St</a>
      </div>
      <ul class="sidebar-menu">
        {{-- Request::segment(1); --}}
          {{-- <li class="menu-header
          @endif">Dashboard</li> --}}
        
        @if(Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 3)
        <li class="nav-item dropdown @if(Request::segment(1) == 'dashboard') active @endif">
            <a href="/dashboard" class="nav-link has"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 3 || Auth::user()->role == 4)
        <li class="nav-item dropdown @if(Request::segment(1) == 'beasiswa') active @endif">
            <a href="/beasiswa" class="nav-link"><i class="fas fa-columns"></i> <span>List Beasiswa</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
        <li class="nav-item dropdown @if(Request::segment(1) == 'list-pendaftar') active @endif">
            <a href="/list-pendaftar" class="nav-link"><i class="far fa-file-alt"></i> <span>List Pendaftar</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
        <li class="nav-item dropdown @if(Request::segment(1) == 'list-register') active @endif">
            <a href="/list-register" class="nav-link"><i class="far fa-file-alt"></i> <span>List Register</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 4)
        <li class="nav-item dropdown @if(Request::segment(1) == 'daftar-beasiswa') active @endif">
            <a href="/daftar-beasiswa" class="nav-link"><i class="far fa-file-alt"></i> <span>Form Daftar Beasiswa</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
        <li class="nav-item dropdown @if(Request::segment(1) == 'detail-pendaftar') active @endif">
            <a href="/detail-pendaftar" class="nav-link"><i class="far fa-file-alt"></i> <span>Halaman Detail Pendaftar</span></a>
        </li>
        @endif

        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
        <li class="nav-item dropdown @if(Request::segment(1) == 'list-pendaftar-admin') active @endif">
            <a href="/list-pendaftar-admin" class="nav-link"><i class="far fa-file-alt"></i> <span>List Pendaftar Admin</span></a>
        </li>
        @endif

        {{-- @if(Auth::user()->role == 1)
        <li class="nav-item dropdown @if(Request::segment(1) == '/list-pendaftar-admin') active @endif">
            <a href="/list-pendaftar-admin" class="nav-link"><i class="far fa-file-alt"></i> <span>Ubah Role</span></a>
        </li>
        @endif --}}
        

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
    </aside>
  </div>