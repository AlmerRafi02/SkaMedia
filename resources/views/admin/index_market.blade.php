<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title; }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navigation row border-bottom">
        @auth
            <div class="col-md-2">
                <a href="" class="navbar-brand float-start ms-5"><img src="../img/smk-pgri.jpg" style="width: 100px; height: 100px; border-radius: 50px 50px 50px 50px; padding: 10px;" alt=""></a>
            </div>
            <div class="col-md-1 mt-4 p-2" style="margin-left: 9rem;">
                <a href="/" class="nav-link text-center d-flex justify-content-center ms-5"><strong>Home</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="" class="nav-link text-center ms-5"><strong>|</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="/market" class="nav-link text-center ms-5"><strong>Mart</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="" class="nav-link text-center ms-5"><strong>|</strong></a>
            </div>
            <div class="col-md-2 mt-4 p-2">
                <strong>
                    <a class="nav-link dropdown-toggle ms-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/news/upload">News</a></li>
                        <li><a class="dropdown-item" href="/market/upload">Market</a></li>
                        <li><a class="dropdown-item" href="/admin/user">User</a></li>
                      </ul>
                </strong>
            </div>
            <div class="col-md-2 mt-3 p-2" style="margin-left: 3rem;">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger float-end" style="border: none;"><strong>Logout <i class="bi bi-box-arrow-right"></i></strong></button>
                </form>
            </div>
        @else
            <div class="col-md-2">
                <a href="" class="navbar-brand float-start ms-5"><img src="../img/smk-pgri.jpg" style="width: 100px; height: 100px; border-radius: 50px 50px 50px 50px; padding: 10px;" alt=""></a>
            </div>
            <div class="col-md-1 mt-4 ms-5 p-2">
                <a href="/" class="nav-link text-center d-flex justify-content-center ms-5"><strong>Home</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="" class="nav-link text-center ms-5"><strong>|</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="/market" class="nav-link text-center ms-5"><strong>Mart</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="" class="nav-link text-center ms-5"><strong>|</strong></a>
            </div>
            <div class="col-md-1 mt-4 ms-5 p-2">
                <a href="/login" class="nav-link text-center float-en"><strong>Login</strong></a>
            </div>
            <div class="col-md-1 mt-4 p-2">
                <a href="" class="nav-link text-center ms-5"><strong>|</strong></a>
            </div>
            <div class="col-md-1 ms-5 mt-4 p-2">
                <a href="/register" class="nav-link text-center float-en"><strong>Register</strong></a>
            </div>
        @endauth
    </div>
    <div class="card col-md-9 mt-3 ms-5">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{  session('success')}}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Information</th>
                <th scope="col">Price</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach ($market as $m)
            <tbody>
                <tr>
                  <td scope="col-md-">{{ $loop->iteration }}</td>
                  <td>
                    <img src="{{ asset('/storage/'. $m->img ) }}" style="max-height: 150px; max-width: 150px; border-radius: 20px">
                  </td>
                  <td>{{ $m->information }}</td>
                  <td>{{ $m->price }}</td>
                  <td>{{ $m->no_telp }}</td>
                  <td>
                    <form action="/news/upload/{{ $m->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                    </form>
                  </td>
                </tr>
                </tbody>
            @endforeach
          </table>
    </div>
    <style>
        html{
        font-family: 'Montserrat', sans-serif;
        overflow-x: hidden;
    }

    #ocean{
        background-image: url(../img/wave.svg);
        background-repeat: no-repeat;
        background-position: bottom;
    }

    .navigation{
        background-image: url(../img/wave-2.svg);
    }

    .card{
        overflow-y: scroll;
        height: 570px;
    }
    </style>
</body>
</html>