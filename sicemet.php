<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>INF304 - Rekayasa Perangkat Lunak</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://raw.githubusercontent.com/naufalist/rpl/master/assets/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom -->
    <style>
        body {
            overflow-x: hidden;
        }

        .navbar{
            background-color:#1c7ad8;
        }

        #page-header{
            background-color:#2196f3;
            background-image:url(https://raw.githubusercontent.com/naufalist/rpl/master/assets/bg-publik.jpg);
            background-position:bottom;
            background-repeat:no-repeat;
            background-size:100% auto
        }

        #page-header .jumbotron{
            padding:2rem 1rem!important;
            text-align:center;
            color:#fff
        }

        #page-header .jumbotron h1{
            font-size:2.5rem!important;
            font-weight:500!important
        }

        .bg-primary {
            background-color: #007bff!important;
        }

        .accortoggle > a {
            display: block;
            position: relative;
        }

        .accortoggle > a:after {
            content: "\f078"; /* fa-chevron-down */
            font-family: 'FontAwesome';
            position: absolute;
            right: 0;
        }

        .accortoggle > a[aria-expanded="true"]:after {
            content: "\f077"; /* fa-chevron-up */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#" style="overflow: hidden;">
            <img src="https://raw.githubusercontent.com/naufalist/rpl/master/assets/logo.png" alt="IPB" style="height: 30px;">
            <strong class="ml-2 d-none d-md-inline-block">INF304</strong>
            <span class="ml-2 font-italic" style="opacity: 0.5;">Rekayasa Perangkat Lunak</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto font-weight-bold font-italic">
                <li class="nav-item ml-2">
                    <a href="/" class="nav-link active router-link-active" target="_self">
                        <i class="fa fa-home fa-lg"></i> Beranda 
                    </a>
                </li>
                <li class="nav-item ml-2">
                    <a href="/" class="nav-link" target="_self" data-toggle="modal" data-target="#anggotaKelompok">
                        <i class="fa fa-list-ul fa-lg"></i> Informasi Kelompok
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-header">
        <div>
            <div class="jumbotron jumbotron-fluid" style="background-color: transparent;">
                <div class="container-fluid">
                    <h1 class="display-3 m-0"> SiCeMet </h1>
                    <h2 class="lead font-weight-bold font-italic mt-2">
                        <div style="">
                        SiCeMet  merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam pengembangan sistem. Selamat Mencoba 😊 
                        </div>
                    </h2>
                    <!-- <p class="lead">
                        <div>
                        SiCeMet  merupakan aplikasi simulasi untuk cek metodologi agar sesuai dengan karakteristik proyek dalam pengembangan sistem. Selamat Mencoba 😊
                        </div>
                    </p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div id="accordion">
                    <div class="card mb-2 shadow-sm">
                        <div class="card-header font-weight-bold" id="headingOne">
                            <h5 class="mb-0 accortoggle">
                                <a role="button" class="collapsed" data-toggle="collapse" data-target="#result" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-sticky-note fa-sm"></i> Hasil
                                </a>
                            </h5>
                        </div>
                        <div id="result" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Metodologi</th>
                                        <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Prototyping</td>
                                            <td><a class="btn btn-primary btn-sm btn-block" href="#" data-toggle="modal" data-target="#prototyping"><i class="fa fa-search fa-sm"></i> Detail</a></td>
                                        </tr>
                                        <!-- <tr>
                                            <th scope="row">2</th>
                                            <td>Scrum</td>
                                            <td><a class="btn btn-outline-primary btn-sm btn-block" href="#">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Incremental</td>
                                            <td><a class="btn btn-outline-primary btn-sm btn-block" href="#">Detail</a></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2 shadow-sm">
                        <div class="card-header font-weight-bold" id="headingOne">
                            <h5 class="mb-0 accortoggle">
                                <a role="button" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-wpforms fa-sm"></i> Kenali Proyek Anda!
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Kebutuhan Awal</label>
                                        <select name="kebutuhan_awal" class="form-control" required>
                                            <option value="">-- Kebutuhan Awal --</option>
                                            <option value="">Dapat dijelaskan</option>
                                            <option value="">Belum jelas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kompleksitas</label>
                                        <select name="kompleksitas" class="form-control" required>
                                            <option value="">-- Kompleksitas --</option>
                                            <option value="">Sederhana</option>
                                            <option value="">Kompleks</option>
                                            <option value="">Sangat Kompleks</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Delivery</label>
                                        <select name="waktu_delivery" class="form-control" required>
                                            <option value="">-- Kompleksitas --</option>
                                            <option value="">< 1 bulan</option>
                                            <option value="">1 - 3 bulan</option>
                                            <option value="">4 - 6 bulan</option>
                                            <option value="">6 - 12 bulan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Tim (SDM)</label>
                                        <select name="jumlah_tim" class="form-control" required>
                                            <option value="">-- Jumlah Tim (SDM) --</option>
                                            <option value="">< 12 orang</option>
                                            <option value="">> 12 orang</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterampilan Tim</label>
                                        <select name="keterampilan_tim" class="form-control" required>
                                            <option value="">-- Keterampilan Tim --</option>
                                            <option value="">Berpengalaman</option>
                                            <option value="">Campuran</option>
                                            <option value="">Tidak Berpengalaman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Klien Terlibat Langsung</label>
                                        <select name="klien_terlibat_langsung" class="form-control" required>
                                            <option value="">-- Klien Terlibat Langsung --</option>
                                            <option value="">Terlibat</option>
                                            <option value="">Tidak Terlibat</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="fa fa-paper-plane fa-md"></i> Cek Metodologi
                                    </button>
                                    <button type="reset" class="btn btn-warning btn-md float-right">
                                        <i class="fa fa-refresh fa-md"></i> Bersihkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="anggotaKelompok" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kelompok RPL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <em class="font-weight-bold mb-2">Dosen Pengajar</em>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Sofiyanti Indriasari S.Kom., M.Kom.
                            <span class="badge badge-success badge-pill">201807198410052001</span>
                        </li>
                        <em class="font-weight-bold mb-2">Mahasiswa</em>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Nurmala Ameliana
                            <span class="badge badge-primary badge-pill">J3D118040</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Muhammad Naufal Wafi
                            <span class="badge badge-primary badge-pill">J3D118042</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Sagita Hapsari
                            <span class="badge badge-primary badge-pill">J3D118044</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Nazla Bella Fadilah
                            <span class="badge badge-primary badge-pill">J3D118046</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Arvy Adhitya Sutisna
                            <span class="badge badge-primary badge-pill">J3D118047</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Sendy Cahyono
                            <span class="badge badge-primary badge-pill">J3D118048</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        Annisa Nur Fitriyani
                            <span class="badge badge-primary badge-pill">J3D118053</span>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="prototyping" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title">Metode Prototyping</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <em class="font-weight-bold mb-2">Alur Metodologi (gambar)</em>
                            <div class="text-center">
                                <img width="300" height="auto" src="https://i.pinimg.com/originals/90/19/5c/90195cb0b08787e9d29c4888e78887a8.jpg" class="rounded" alt="...">
                            </div>
                            <em class="font-weight-bold mb-2">Penjelasan</em>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam deserunt quibusdam ducimus consectetur expedita fuga iste fugit eum voluptate vel explicabo asperiores nostrum, similique ipsa a dicta distinctio aut impedit!</p>
                            <em class="font-weight-bold mb-2">Kelebihan</em>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>consectetur, adipisicing elit</li>
                                <li>Totam deserunt quibusdam</li>
                            </ul>
                            <em class="font-weight-bold mb-2">Kelemahan</em>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>consectetur, adipisicing elit</li>
                                <li>Totam deserunt quibusdam</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="mt-4 fixed-bottom" style="background-color: #f5f5f5; position: fixed;">
        <div class="container-fluid py-3 small text-black-50" style="border-top: 1px solid rgb(221, 221, 221);">
            <div class="row">
                <div class="col-6"> Made with <span style="color: #e25555;">&#9829;</span><strong> TEK553AP1 </strong>
                </div>
                <div class="col-6 text-right"> Version <strong> 20200805.1 </strong>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
