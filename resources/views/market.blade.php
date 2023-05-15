<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navigation row border-bottom">
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
                        <a href="/market/upload" class="text-decoration-none text-dark">
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
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="/detail" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-4 mt-2 me-1 mb-3" style="width: 16rem;">
                            <img src="https://source.unsplash.com/1000x1000/?product" style="max-width: 300px; max-height: 300px;" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">
                                    Detail<i class="bi bi-arrow-right-circle" style="margin-left: 10px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ms-5">
                <div class="informasi card">
                    <div class="row">
                        <div class="col-md-1 ms-2">
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
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill mt-3" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
                            </p>
                          </div>
                          <div class="col-md-9">
                              <p class="mt-3">(0341) 554383</p>
                              <p>0821 33000 390</p>
                              <p>smkpgri3malang@gmail.com</p>
                              <p>skariga_official</p>
                              <p>JL. Raya Tlogomas XI No. 29</p>
                              <p>
                                SkaMart ini adalah sarana yang di sediakan untuk menjembatani siswa untuk membeli barang ataupun menjual barang, untuk pembelian atau penjualan di SkaMart juga di peruntukkan untuk umum/non siswa
                              </p>
                          </div>
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
        background-image: url(./img/wave-2.svg);
    }

    .postingan{
        overflow-x: hidden;
        overflow-y: scroll;
        max-height: 530px;
    }
</style>
</body>
</html>