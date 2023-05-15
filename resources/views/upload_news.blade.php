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
    <div class="create card col-md-7 sm-shadow mt-5" style="margin-left: 270px;">
        <div style="text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-newspaper mt-3 mb-3" viewBox="0 0 16 16">
                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
            </svg>
            <h2 class="mb-4"><strong>Upload News</strong></h2>
        </div>
        <div style="margin-left: 80px;">
            <div class="row">
                <div class="col-md-5">
                    <label for="judul" class="form-label ms-3"><strong>Judul</strong></label>
                    <input type="text" class="form-control ms-3" name="judul" placeholder="Judul">
                </div>
                <div class="col-md-5">
                    <label for="slug" class="form-label ms-3"><strong>Slug</strong></label>
                    <input type="text" class="form-control ms-3" name="slug">
                </div>
            </div>
            <div class="col-md-10 mt-2">
                <label for="image" class="form-label ms-3"><strong>Image</strong></label>
                <input type="file" name="image" class="form-control"  multiple style="margin-left: 15px;">
            </div>
            <div class="col-md-10 mt-2">
                <label for="info" class="form-label ms-3"><strong>Info</strong></label>
                <textarea name="info" class="form-control ms-3" cols="30" rows="5" placeholder="Write Info"></textarea>
            </div>
            <div class="row mt-2 mb-3">
                <div class="col-md-2" style="margin-left: 400px;">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Upload</button>
                </div>
                <div class="col-md-2">
                    <a href="/">
                        <button class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
            overflow: hidden;
        }

        .create{
        background-image: url(../img/wave.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        }
    </style>
</body>
</html>