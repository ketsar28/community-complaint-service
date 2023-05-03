<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            background: #1e3932;
        }

        .wrap-card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .heading {
            color:#006341;
        }

        .btn-purple {
            background: #006341;
            width: 100%;
            color: #fff;
            transition: all 0.5s;
        }

        .btn-purple:hover {
            background: #1e3932;
        }

    </style>

    <title>Halaman Masuk Petugas</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5 font-weight-bold">PEKAT</h2>
                <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
                <div class="card py-3 px-2 wrap-card">
                    <div class="card-body">
                        <h3 class="text-center mb-4 font-weight-bold heading">FORM PETUGAS</h3>
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple font-weight-bold text-white">MASUK</button>
                        </form>
                    </div>
                </div>
                
                <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali
                    ke Halaman Utama</a>
            </div>
        </div>
    </div>
</body>

</html>
