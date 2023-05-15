<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex justify-content-center" style="margin-top: 120px;">
        <div class="card col-md-3 mt-3 mb-3 b-bottom">
            <div>
                <i class="bi bi-person-circle d-flex justify-content-center mt-2 shadow-sm" style="font-size: 80px;"></i>
                <strong><p class="d-flex justify-content-center fs-3">Login</p></strong>
            </div>
            <div class="col-md-11">
                <label for="exampleFormControlInput1" class="form-label ms-3">Email address</label>
                <input type="email" class="form-control ms-3" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="col-md-11 mt-3">
                <label for="inputPassword5" class="form-label ms-3">Password</label>
                <input type="password" id="inputPassword5" class="form-control ms-3" aria-labelledby="passwordHelpBlock">
            </div>
            <div class="col-md-11 mt-3 ms-3">
                <a href="/register" class="text-decoration-none">
                    <p>Belum Punya Akun?</p>
                </a>
            </div>
            <div class="row mt-3 col-md-12 mb-3">
                <div class="col-md-3 ms-auto">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="col-md-2" style="margin-right: 30px;">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            background-image: url(../img/wave.svg);
            background-repeat: no-repeat;
            background-position: bottom;
            background-position-y: 400px;
        }
    </style>
</body>
</html>