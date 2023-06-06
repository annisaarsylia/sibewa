<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
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
                        <h1>List Register Akun Sibewa</h1>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Form List Register Akun Sibewa</h4>
                        </div>
                        <div class="card-body p-4 mb-5">
                            <div class="table-responsive">
                                <table id="myTable" class="display table table-striped table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <th>{{ $user->name }}</th>
                                                <td>{{ $user->email }}</td>
                                                <td>
													@switch($user->role)
														@case(1)
															Super Admin
															@break
														@case(2)
															Kemahasiswaan
															@break
														@case(3)
															Partnership
															@break
														@default
															Mahasiswa
													@endswitch
												</td>
                                                <td>
                                                    <a class="text-decoration-none" id="editButton"
														href="#" data-id="{{ $user->id }}">
														<i class="bi bi-pencil-square"></i>
														Ubah Role
										            </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
                    Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-2 col-form-label text-end">Role :</label>
                        <div class="col-sm-10">
							<select name="role" id="role" class="form-control" required>
								<option value="" selected disabled>Pilih Anggota</option>
								<option value="1">Super Admin</option>
								<option value="2">Kemahasiswaan</option>
								<option value="3">Partnership</option>
								<option value="4">Mahasiswa</option>
							</select>
                        </div>
                    </div>

                    <div style="display: block; text-align: -webkit-center;">
                        <button class="btn btn-primary mb-3" id="save"> Save</button>
                    </div>
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // 02_PROSES SIMPAN
        $('body').on('click', '#addButton', function(e) {
            e.preventDefault();
            $('#exampleModal').modal('show');
            $('#save').click(function() {
                save();
            });
        });

        // 03_PROSES EDIT
        $('body').on('click', '#editButton', function(e) {
            var id = $(this).data('id');
            $.ajax({
                url: 'list-register-admin/' + id + '/edit',
                type: 'GET',
                success: function(response) {
                    console.log(response.result);
                    $('#exampleModal').modal('show');
                    $('#role').val(response.result.role);
                    $('#save').click(function() {
                        save(id);
                    });
                }
            });
        });

        // 04_PROSES Delete
        $('body').on('click', '#deleteButton', function(e) {
            if (confirm('Are you sure deleting this data ?') == true) {
                var id = $(this).data('id');
                $.ajax({
                    url: 'list-register-admin/delete/' + id,
                    type: 'POST',
                    success: function(html) {
                        location.reload();
                    },
                });
            }
        });

        // fungsi simpan dan update
        function save(id = '') {
            if (id == '') {
                var action = 'list-register-admin/create';
                var method = 'POST';
            } else {
                var action = 'list-register-admin/update/' + id;
                var method = 'POST';
            }
            console.log(action);
            $.ajax({
                url: action,
                type: method,
                data: {
                    role: $('#role').val(),
                },
                success: function(html) {
                    location.reload();
                },
            });
        }
        $('#exampleModal').on('hidden.bs.modal', function() {
            $('#role').val();
        });
    </script>
</body>

</html>
