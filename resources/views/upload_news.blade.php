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
    <div class="create card col-md-7 sm-shadow mt-3" style="margin-left: 270px;">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{  session('success')}}
            </div>
        @endif
        <div style="text-align: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-newspaper mt-3 mb-3" viewBox="0 0 16 16">
                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
            </svg>
            <h2 class="mb-4"><strong>Upload News</strong></h2>
        </div>
        <div style="margin-left: 80px;">
            <form action="/news/upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- <input type="hidden" class="form-control ms-3" id="user_id" name="user_id" placeholder="Product" value="{{ auth()->user()->id }}"> --}}
                    <div class="col-md-5">
                        <label for="judul" class="form-label ms-3"><strong>Judul</strong></label>
                        <input type="text" class="form-control ms-3 @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Judul" value="{{ old('judul') }}">
                        @error('judul')
                        <div class="invalid-feedback ms-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label for="slug" class="form-label ms-3"><strong>Slug</strong></label>
                        <input type="text" class="form-control ms-3 @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                        @error('slug')
                        <div class="invalid-feedback ms-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-10 mt-2">
                    <label for="img" class="form-label ms-3"><strong>Image</strong></label>
                    <div class="row">
                        <div class="col-md-6">
                            <img id="frame" class="img-preview mb-1" style="height: 150px; width: 150px; margin-left: 17px;">
                            <input type="file" name="img" class="form-control @error('img') is-invalid @enderror"  multiple style="margin-left: 15px;" onchange="previewImage()">
                        </div>
                    </div>
                    @error('img')
                        <div class="invalid-feedback ms-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-10 mt-2">
                    <label for="information" class="form-label ms-3"><strong>Info</strong></label>
                    <textarea name="information" class="form-control ms-3 @error('information') is-invalid @enderror" cols="30" rows="5" placeholder="Write Info" value="{{ old('information') }}"></textarea>
                    @error('information')
                        <div class="invalid-feedback ms-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col-md-3" style="margin-left: 380px;">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Upload</button>
                    </div>
                    <div class="col-md-2">
                            <button class="btn btn-danger" style="margin-left: -50px;"><i class="bi bi-x-circle"></i><a href="/" class="text-decoration-none" style="color:white;"> Cancel</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const title = document.querySelector("#judul");
        const slug = document.querySelector("#slug");
    
        title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
        });
    </script>
    <script>
        function previewImage() {
            frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <style>
        html{
            font-family: 'Montserrat', sans-serif;
        }

        .create{
        background-image: url(/img/wave.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        }
    </style>
</body>
</html>