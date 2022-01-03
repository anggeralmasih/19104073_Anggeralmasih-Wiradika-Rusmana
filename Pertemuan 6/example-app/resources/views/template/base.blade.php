<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Latihan Laravel</title>
</head>

<body>
    <div class="container mt-5" style="height: 500px">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a href="#" class="navbar-brand">Laravel</a>
                    <button class="navbar-toggler" type="button" data-toggler="collapse"
                        data-target="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a href="{{ route('index') }}" class="nav-link active">Beranda <span class="sr-only">(current)</span></a>
                            <a href="#" class="nav-link">Mahasiswa</a>
                            <a href="{{ route('about') }}" class="nav-link">About</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <footer class="text-white text-center pb-2 pt-4 mt-5 bg-dark">
            <p>Improved by <a
                    href="https://www.instagram.com/angger.almasih/" class="text-white" style="font-weight: bold">Angger Almasih</a>
            </p>
        </footer>
    </div>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
