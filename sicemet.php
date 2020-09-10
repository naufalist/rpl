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
            <img src="data:image/png;base64,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" alt="IPB" style="height: 30px;">
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
