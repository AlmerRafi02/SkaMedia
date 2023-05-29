<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{  session('success')}}
            </div>
        @endif
    <div class="row col-md-12 ms-4">
        <div class="ms-3 mt-3 col-md-8">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://source.unsplash.com/930x220/?news" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>SkaMedia</h5>
                      <p><strong>SkaNews laporkan tentang skariga di sini</strong></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://source.unsplash.com/900x220/?product" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>SkaMedia</h5>
                      <p><strong>SkaMart Buy or Sell</strong></p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="card col-md-3 shadow-sm mt-3 ms-5 float-end">
            <div class="row">
                <div class="col-md-1">
                    <p class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </p>
                  </div>
                  <div class="col-md-9">
                      <p class="mt-3">(0341) 554383</p>
                      <p>0821 33000 390</p>
                      <p>smkpgri3malang@gmail.com</p>
                      <p>skariga_official</p>
                      <p>JL. Raya Tlogomas XI No. 29</p>
                  </div>
                </div>
            </div>
        </div>
            <div class="tutorial row col-md-12 ms-4 mt-1">
              <div class="card mt-3 ms-3 col-md-8 shadow-sm">
                  <center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-info-circle-fill mt-3" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                    <p class="text-justify mt-3">SkaMedia ini adalah sarana yang di sediakan untuk menjembatani sekaligus memudahkan warga khususnya untuk melayangkan aspirasi, saran, kritik, pengaduan maupun pertanyaan kepada sekolah SMK PGRI 3 MALANG. Silahkan layangkan pengaduan anda untuk Skariga yang lebih baik.</p>
                  </center>
              </div>
              <div class="card mt-3 ms-5 col-md-3 float-end shadow-sm">
                @auth
                <div class="row">
                    <div class="col-md-6">
                        <a href="/news/upload/create" class="text-decoration-none text-dark">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-upload mt-4" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                                <p class="text-justify mt-3">Upload Here!!!</p>
                            </center>
                        </a>
                    </div>
                    @can('admin')
                    <div class="col-md-6">
                        <a href="/news/upload" class="text-decoration-none text-dark">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-eye-fill mt-4" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <p class="text-justify mt-3">Pengaduan</p>
                            </center>
                        </a>
                    </div>
                    @endcan
                </div>
                @else
                <center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-info-circle-fill mt-4" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                    <p class="text-justify mt-4">Silahkan login/register untuk upload berita</p>
                </center>
                @endauth
              </div>
              <div class="card mt-3 ms-3 col-md-2 shadow-sm">
                <center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-1-circle-fill mt-3" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z"/>
                    </svg>
                    <p class="text-justify mt-3">Warga menginput pengaduan via web</p>
                </center>
            </div>
            <div class="card mt-3 col-md-2 shadow-sm">
                <center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-2-circle-fill mt-3" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                    </svg>
                    <p class="text-justify mt-3">Admin menerima pengaduan dan mengajukan ke sekolah</p>
                </center>
            </div>
            <div class="card mt-3 col-md-2 shadow-sm">
                <center>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-3-circle-fill mt-3" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                    </svg>
                    <p class="text-justify mt-3">Jika masalah pengaduan berkaitan dengan siswa akan diajukan ke kesiswaan</p>
                </center>
            </div>
            <div class="card mt-3 col-md-2 shadow-sm">
                    <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-4-circle-fill mt-3" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                          </svg>
                        <p class="text-justify mt-3">Jika sudah acc dua belah pihak pengaduan akan diproses</p>
                    </center>
            </div>
            <div class="card mt-3 col-md-3 ms-5 shadow-sm">
                <a href="https://r.search.yahoo.com/_ylt=AwrKC0LnhlNkd9QQBVPLQwx.;_ylu=Y29sbwNzZzMEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1683224424/RO=10/RU=http%3a%2f%2fsmkpgri3-malang.sch.id%2f/RK=2/RS=bk7i57jqgUOu1nIKs6To4oib7Z8-" class="text-decoration-none text-dark">
                    <div class="row">
                        <div class="col-md-6 ms-4">
                            <center>
                                <p style="font-size: 23px; margin-top: 60px;">About Me</p>
                            </center>
                        </div>
                        <div class="col-md-3 ms-3 float-end">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-circle-fill mt-5" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                </svg>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            </div>
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
        background-image: url(./img/wave-2.svg);
    }
</style>
</body>
</html>