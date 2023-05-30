<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Beasiswa.id</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="stisla/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="stisla/node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="stisla/node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="stisla/node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="stisla/assets/css/style.css">
  <link rel="stylesheet" href="stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="stisla/assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="stisla/assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="stisla/assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="stisla/assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="stisla/assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> --}}
          {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> --}}
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
              {{-- <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a> --}}
              {{-- <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a> --}}
              <div class="dropdown-divider"></div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                {{-- <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link> --}}
                
                <button type="submit" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </button>
              </form>
            </div>
          </li>
        </ul>
      </nav>
      @include('components.sidebar')
      <!-- Main Content -->
       <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar Beasiswa</h1>
          </div>
          <div class="card">
            <form class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data" >@csrf
              <div class="card-header">
                <h4>Form Pendaftaran Beasiswa</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>NRP</label>
                  <input type="number" class="form-control" name="nrp" required>
                  <div class="invalid-feedback">
                    Berisi 10 angka.
                  </div>
                </div>
                <div class="form-group" >
                  <label>Nama</label>
                  <input type="text" class="form-control" name="name" required>
                  <div class="invalid-feedback">
                    Isi menggunakan nama lengkap!
                  </div>
                </div>
                <div class="form-group">
                  {{-- <div class="section-title mt-0">Departemen</div> --}}
                  <div class="form-group">
                    <label>Nama Departemen</label>
                    <select class="form-control" name="departement_name" required>
                      <option value="departemen teknik elektronika">Departemen Teknik Elektronika</option>
                        <option value="departemen teknik informatika dan komputer">Departemen Teknik Informatika dan Komputer</option>
                        <option value="departemen teknik mekanika energi">Departemen Teknik Mekanika Energi</option>
                        <option value="departemen teknologi multimedia kreatif">Departemen Teknologi Multimedia Kreatif</option>
                    </select>
                  </div>                  
                </div>
                <div class="form-group mb-0">
                  {{-- <div class="section-title">Jurusan</div> --}}
                    <div class="form-group">
                      <label>Nama Jurusan</label>
                      <select class="form-control select2" name="major_name" required>
                        <option value="teknik elektronika">Teknik Elektronika</option>
                        <option value="teknik telekomunikasi">Teknik Telekomunikasi</option>
                        <option value="teknik elektro industri">Teknik Elektro Industri</option>
                        <option value="teknik multimedia broadcasting">Teknik Multimedia Broadcasting</option>
                        <option value="teknik informatika">Teknik Informatika</option>
                        <option value="teknik mekatronika">Teknik Mekatronika</option>
                        <option value="teknik komputer">Teknik Komputer</option>
                        <option value="teknologi game">Teknologi Game</option>
                        <option value="teknologi rekayasa internet">Teknologi Rekayasa Internet</option>
                        <option value="sistem pembangkit energi">Sistem Pembangkit Energi</option>
                        <option value="sains data terapan">Sains Data Terapan</option>
                        <option value="teknologi rekayasa multimedia">Teknologi Rekayasa Multimedia</option>
                      </select>
                    </div>
                </div>
                <div class="form-group mb-0">
                  <label>Nomer HP</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </div>
                    </div>
                    <input type="number" class="form-control phone-number" name="phone" required>
                    <div class="invalid-feedback">
                      Minimal 11 angka.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label>Pekerjaan Ayah</label>
                    <select class="form-control" name="father_job" required>
                      <option value="dokter/perawat/tentara/polisi">Dokter/Perawat/Tentara/Polisi</option>
                        <option value="pns">PNS</option>
                        <option value="pegawai bumn">Pegawai BUMN</option>
                        <option value="karyawan swasta">Karyawan Swasta</option>
                        <option value="petani/nelayan/peternak">Petani/Nelayan/Peternak</option>
                        <option value="other">Other</option>
                        <div class="invalid-feedback">
                          Isi pekerjaan orang tua dengan benar!
                        </div>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label>Pekerjaan Ibu</label>
                    <select class="form-control" name="mother_job" required>
                      <option value="dokter/perawat/tentara/polisi">Dokter/Perawat/Tentara/Polisi</option>
                        <option value="pns">PNS</option>
                        <option value="pegawai bumn">Pegawai BUMN</option>
                        <option value="karyawan swasta">Karyawan Swasta</option>
                        <option value="petani/nelayan/peternak">Petani/Nelayan/Peternak</option>
                        <option value="ibu rumah tangga">Ibu Rumah Tangga</option>
                        <option value="other">Other</option>
                        <div class="invalid-feedback">
                          Isi pekerjaan orang tua dengan benar!
                        </div>
                    </select>
                  </div> 
                </div>
                <div class="section-title">Penghasilan Ayah
                    <div class="form-group">
                      <label>Isi dengan kisaran orang tua tiap bulan</label>
                      <select class="form-control select2" name="father_salary" required>
                        <option value="0 - 500.000">0 - 500.000</option>
                        <option value="500.0000 - 1.000.000">500.0000 - 1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="2.000.000 - 4.000.000">2.000.000 - 4.000.000</option>
                        <option value="4.000.000 - 5.000.000">4.000.000 - 5.000.000</option>
                        <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                        <option value="10.000.000++">10.000.000++</option>
                        <option value="lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="section-title">Penghasilan Ibu
                    <div class="form-group">
                      <label>Isi dengan kisaran orang tua tiap bulan</label>
                      <select class="form-control select2" name="mother_salary" required>
                        <option value="0 - 500.000">0 - 500.000</option>
                        <option value="500.0000 - 1.000.000">500.0000 - 1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="2.000.000 - 4.000.000">2.000.000 - 4.000.000</option>
                        <option value="4.000.000 - 5.000.000">4.000.000 - 5.000.000</option>
                        <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                        <option value="10.000.000++">10.000.000++</option>
                        <option value="lainnya">Lainnya</option>
                      </select>
                    </div>
                  </div>
                  </div>
                    <div class="form-group">
                      <label>Slip Gaji Orang Tua</label>
                      <input type="file" class="form-control" name="parents_salary_pic">
                    </div>
                    <div class="form-group">
                      <label>Motivation Later</label>
                      <input type="file" class="form-control" name="motivation_letter" required>
                    </div>
                    <div class="form-group">
                      <label>Bukti Prestasi</label>
                      <input type="file" class="form-control" name="achievement" required>
                    </div>
                    <div class="form-group">
                      <label>Kategori Beasiswa</label>
                      <select class="form-control" name="beasiswa_id" required>
                          @foreach($beasiswas as $beasiswa)
                            <option value="{{ $beasiswa->id }}">{{ $beasiswa->nama }}</option>
                          @endforeach
                          <option>Other</option>
                          <div class="invalid-feedback">
                            Isi kategori beasiswa dengan benar!
                          </div>
                      </select>
                    </div> 

              
              
              <div class="card-footer text-right">
                <button class="btn btn-secondary" type="reset">Reset</button>
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="stisla/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="stisla/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="stisla/assets/js/scripts.js"></script>
  <script src="stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="stisla/assets/js/page/index-0.js"></script>
</body>
</html>
