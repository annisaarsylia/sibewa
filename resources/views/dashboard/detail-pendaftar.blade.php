<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Beasiswa.id</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('stisla/node_modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/node_modules/weathericons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/node_modules/weathericons/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/node_modules/summernote/dist/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
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
                        <h1>Detail Pendaftar</h1>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Halaman Detail Pendaftar</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Status</th>
                                        @if($user->status == 0) <th>Menunggu</th>
                                        @elseif($user->status == 1) <th>Diterima</th>
                                        @elseif($user->status == 2) <th>Ditolak</th>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>NRP</th>
                                        <th>{{ $user->nrp }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <th>{{ $user->name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama Departemen</th>
                                        <th>{{ $user->departement_name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nama Jurusan</th>
                                        <th>{{ $user->major_name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Nomer HP</th>
                                        <th>{{ $user->phone }}</th>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan Ayah</th>
                                        <th>{{ $user->father_job }}</th>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan Ibu</th>
                                        <th>{{ $user->mother_job }}</th>
                                    </tr>
                                    <tr>
                                        <th>Penghasilan Ayah</th>
                                        <th>{{ $user->father_salary }}</th>
                                    </tr>
                                    <tr>
                                        <th>Penghasilan Ibu</th>
                                        <th>{{ $user->mother_salary }}</th>
                                    </tr>
                                    <tr>
                                        <th>Slip Gaji</th>
                                        <th><a class="btn btn-primary" href="/{{ $user->parents_salary_pic }}">Buka</a></th>
                                    </tr>
                                    <tr>
                                        <th>Motivation Latter</th>
                                        <th><a class="btn btn-primary" href="/{{ $user->motivation_letter }}">Buka</a></th>
                                    </tr>
                                    <tr>
                                        <th>Bukti Prestasi</th>
                                        <th><a class="btn btn-primary" href="/{{ $user->achievement }}">Buka</a></th>
                                    </tr>
                                    <tr>
                                        <th>Kategori Beasiswa</th>
                                        <th>{{ $user->beasiswa->nama }}</th>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        @if(Auth::user()->role ==  2 || Auth::user()->role ==  1 )                
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Ubah Status Penerimaan
                                </button>   
                            </nav>
                        </div>
                        @endif
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/list-pendaftar/ubah-status">@csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Status Penerimaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status Penerimaan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status">
                                <option @if($user->status == '0') selected @endif value="0">menunggu</option>
                                <option @if($user->status == '1') selected @endif value="1">diterima</option>
                                <option @if($user->status == '2') selected @endif value="2">ditolak</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

  
    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
