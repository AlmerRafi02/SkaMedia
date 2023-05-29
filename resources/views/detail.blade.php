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
    <div id="ocean">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group w-100 mb-3 ms-5 mt-3">
                    <input type="text" class="form-control ms-5 w-80" placeholder="Produk" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary me-2" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-md-4 ms-5">
                <div class="row">
                    <div class="card w-25 mt-3" style="height: 40px;">
                        <a href="" class="text-decoration-none text-dark">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upload float-start mt-2" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                                <p style="font-size: 12px; margin-left: 23px;">Upload here!</p>
                            </center>
                        </a>
                    </div>
                    <div class="card w-25 mt-3 ms-3" style="height: 40px;">
                        <a href="/mypost" class="text-decoration-none text-dark">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-image float-start" viewBox="0 0 16 16">
                                    <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12V2z"/>
                                </svg>
                                <p class="mt-2" style="font-size: 12px; margin-left: 23px;">My Post</p>
                            </center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="postingan card ms-4">
                    <div class="row">
                        @foreach ($market as $m)
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
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
                                <a href="/detail/{{ $m->slug }}" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 ms-5">
                <div class="informasi card">
                        @if ($detail->img)
                            <center>
                                <img src="{{ asset('/storage/'. $detail->img ) }}" class="mt-2" style="width: 210px; height: 210px; border-radius: 20px 20px 20px 20px;">
                            </center>
                        @else
                            <center>
                                <img class="mt-2" src="../img/not-found.png" style="width: 210px; height: 210px; border-radius: 20px 20px 20px 20px;">
                            </center>
                        @endif
                    <div class="row">
                        <div class="col-md-1 ms-3">
                            <p class="mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
                            </p>
                            </p>
                        </div>
                        <div class="col-md-9">
                            <p class="mt-3">
                                {{ $detail->information }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 ms-3">
                            <p class="mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                </svg>
                            </p>
                        </div>
                        <div class="col-md-9">
                            <p class="mt-3">
                                {{ $detail->price}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="https://api.whatsapp.com/send/?phone={{ $detail->no_telp }}" class="d-flex justify-content-center">
                            <button class="btn btn-success mb-3">
                                <i class="bi bi-whatsapp"> WhatsApp</i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        background-image: url(../img/wave-2.svg);
    }

    .postingan{
        overflow-x: hidden;
        overflow-y: scroll;
        height: 530px;
    }

    .informasi{
        overflow-y: scroll;
        overflow-x: hidden;
        height: 530px;
    }
</style>
</body>
</html>