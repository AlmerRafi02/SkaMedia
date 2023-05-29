<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title; }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                <a href="/mypost" class="nav-link text-center ms-5"><strong>Hallo, {{ auth()->user()->name }}</strong></a>
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
    @if (session()->has('success'))
        <div class="alert alert-success col-md-8 ms-3" role="alert">
            {{  session('success')}}
        </div>
    @endif
    <div id="ocean">
        <div class="row">
            <div class="mypost card col-md-8 mt-3 ms-4">
                <div class="row">
                    @foreach($market as $m)
                    <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16.5rem;">
                        @if ($m->img)
                            <center>
                                <img src="{{ asset('/storage/'. $m->img ) }}" class="mt-2" style="width: 210px; height: 210px; border-radius: 20px 20px 20px 20px;">
                            </center>
                        @else
                            <center>
                                <img class="mt-2" src="../img/not-found.png" style="width: 210px; height: 210px; border-radius: 20px 20px 20px 20px;">
                            </center>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $m->product }}</h5>
                            <p class="card-text">{{ $m->price }}</p>
                            <div class="row">
                                <div class="update col-md-5">
                                    <a href="/market/upload/{{ $m->slug }}/edit" class="btn btn-primary">
                                        Edit<i class="bi bi-pencil-fill" style="margin-left: 3px;"></i>
                                    </a>
                                </div>
                                <div class="update col-md-7">
                                    <form action="/market/upload/{{ $m->slug }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete <i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="user card col-md-3 ms-5 mt-3">
                        @if ($profile->img)
                            <center>
                                <img src="{{ asset('/storage/'. $profile->img ) }}" class="mt-2" style="width: 210px; height: 210px; border-radius: 20px 20px 20px 20px;">
                            </center>
                        @else       
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-badge mt-3" viewBox="0 0 16 16">
                                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                </svg>
                            </center>  
                        @endif
                      
                <div class="row mt-4">
                    <div class="col-md-1">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="col-md-11">
                        <p>: {{ auth()->user()->name }}</p>
                    </div>
                    <div class="col-md-1">
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div class="col-md-11">
                        <p>: {{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script>
        function previewImage() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
            overflow: hidden;
        }

        #ocean{
            background-image: url(../img/wave.svg);
            background-repeat: no-repeat;
            background-position: bottom;
        }

        .navigation{
            background-image: url(./img/wave-2.svg);
        }

        .mypost{
            overflow-y: scroll;
            overflow-x: hidden;
            height: 580px;
        }

        .user{
            max-height: 580px;
        }

        .open-form{
            border-radius: 30px;
            background-color: #0050b8;
            color: #ffffff;
            border: none;
        }

        .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 35px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        padding: 20px;
        width: 300px;
        }

        .form-container {
        max-width: 250px;
        }

        .form-container input[type=text], .form-container input[type=email] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        }

        .form-container .btn {
        background-color: #1549b8;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        }

        .form-container .cancel {
        background-color: red;
        }

        .form-container .btn:hover, .open-button:hover {
        opacity: 0.8;
        }
    </style>
</body>
</html>