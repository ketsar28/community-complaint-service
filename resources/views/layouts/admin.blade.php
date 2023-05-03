<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
    @yield('css')
        
    <style>
        .btn-purple {
            background: #006341;
            border: 1px solid #006341;
            color: #fff;
            transition: all .5s;
        }

        .btn-purple:hover {
            background: #1e3932;
            border: 1px solid #1e3932;
            color: #fff;
        }

        .log-wrap a{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="mb-0">PEKAT</h3>
                <p class="text-white mb-0">Pengaduan Masyarakat</p>
            </div>

            <ul class="list-unstyled components">
                @if (Auth::guard('admin')->user()->level == 'admin')
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                    <a href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
                <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}">
                    <a href="{{ route('petugas.index') }}">Petugas</a>
                </li>
                <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}">
                    <a href="{{ route('masyarakat.index') }}">Masyarakat</a>
                </li>
                <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
                    <a href="{{ route('laporan.index') }}">Laporan</a>
                </li>
                @elseif(Auth::guard('admin')->user()->level == 'petugas')
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                    <a href="{{ route('pengaduan.index') }}">Pengaduan</a>
                </li>
                @endif
            </ul>
        </nav>


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="ml-2">@yield('header')</div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul name='log-out' class="log-wrap nav navbar-nav ml-auto">
                            <a href="{{ route('admin.logout') }}" class="text-white  font-weight-bold">{{ Auth::guard('admin')->user()->nama_petugas }} <box-icon name='log-out' color='red'></box-icon></a>
                        </ul>
                        {{-- <ul class="nav navbar-nav ml-auto">
                            <a href="{{ route('admin.logout') }}" class="btn btn-white btn-sm">{{ Auth::guard('admin')->user()->nama_petugas }}</a>
                        </ul> --}}
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>

    @yield('js')
    </body>

</html>
