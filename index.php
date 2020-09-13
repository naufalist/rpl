<?php

function cekKarakter($data){
    $karakteristik = [
        "incremental" => [
            "kebutuhan_awal" => "dapat dijelaskan",
            "kompleksitas" => "sederhana",
            "waktu_delivery" => "1 - 3 bulan",
            "jumlah_tim" => "< 12 orang",
            "keterampilan_tim" => "campuran",
            "klien_terlibat_langsung" => "terlibat"
        ],
        "vshaped" => [
            "kebutuhan_awal" => "dapat dijelaskan",
            "kompleksitas" => "sederhana",
            "waktu_delivery" => "< 1 bulan",
            "jumlah_tim" => "> 12 orang",
            "keterampilan_tim" => "campuran",
            "klien_terlibat_langsung" => "tidak terlibat"
        ],
        "spiral" => [
            "kebutuhan_awal" => "tidak dapat dijelaskan",
            "kompleksitas" => "kompleks",
            "waktu_delivery" => "1 - 3 bulan",
            "jumlah_tim" => "> 12 orang",
            "keterampilan_tim" => "berpengalaman",
            "klien_terlibat_langsung" => "terlibat"
        ],
        "rapid application development" => [
            "kebutuhan_awal" => "tidak dapat dijelaskan",
            "kompleksitas" => "kompleks",
            "waktu_delivery" => "1 - 3 bulan",
            "jumlah_tim" => "> 12 orang",
            "keterampilan_tim" => "berpengalaman",
            "klien_terlibat_langsung" => "terlibat"
        ],
        "prototyping" => [
            "kebutuhan_awal" => "dapat dijelaskan",
            "kompleksitas" => "kompleks",
            "waktu_delivery" => "1 bulan",
            "jumlah_tim" => "> 12 orang",
            "keterampilan_tim" => "berpengalaman",
            "klien_terlibat_langsung" => "terlibat"
        ],
        "scrum" => [
            "kebutuhan_awal" => "tidak dapat dijelaskan",
            "kompleksitas" => "kompleks",
            "waktu_delivery" => "1 bulan",
            "jumlah_tim" => "< 12 orang",
            "keterampilan_tim" => "berpengalaman",
            "klien_terlibat_langsung" => "terlibat"
        ],
        "extreme programming" => [
            "kebutuhan_awal" => "tidak dapat dijelaskan",
            "kompleksitas" => "sederhana",
            "waktu_delivery" => "1 - 3 bulan",
            "jumlah_tim" => "< 12 orang",
            "keterampilan_tim" => "campuran",
            "klien_terlibat_langsung" => "terlibat"
        ]
    ];

    $metodologi = [
        "incremental" => 0,
        "vshaped" => 0,
        "spiral" => 0,
        "rapid application development" => 0,
        "prototyping" => 0,
        "scrum" => 0,
        "extreme programming" => 0,
    ];

    // return $metodologi;
    // exit();

    foreach ($metodologi as $metode => $poin) {
        foreach ($karakteristik[$metode] as $karakter => $nilaiKarakter) {
            if ($data[$karakter] == $nilaiKarakter) {
                $metodologi[$metode]++;
            }
        }
    }

    arsort($metodologi);
    // print_r($metodologi);
    return $metodologi;

}

?>
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

    <!-- Custom CSS -->
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

    <script>
        function metodologi(metodologi)
        {
            var incremental = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/incremental.png",
                "<ol type='a' class='mb-2'><li><i>Requirement</i> : proses penentuan kebutuhan atau analisis kebutuhan.</li><li><i>Specification</i> : proses spesifikasi dimana menggunakan analisis kebutuhan sebagai acuannya</li><li><i>Architecture Design</i> : perancangan <i>software</i> yang terbuka agar dapat diterapkan sistem pembangunan per-bagian pada tahapan selanjutnya.</li><li><i>Code</i> : melakukan koding.</li><li><i>Test</i> : melakukan <i>testing</i> dalam model ini.</li></ol>",
                "<ol type='a' class='mb-2'><li>Merupakan model dengan manajemen yang sederhana</li><li>Pengguna tidak perlu menunggu sampai seluruh sistem dikirim untuk mengambil keuntungan dari sistem tersebut.</li><li>Nilai penggunaan dapat ditentukan pada setiap <i>increment</i> sehingga fungsionalitas sistem disediakan lebih awal.</li><li>Memiliki risiko lebih rendah terhadap keseluruhan pengembagan sistem.</li><li>Prioritas tertinggi pada pelayanan sistem adalah yang paling diuji.</li></ol>",
                "<ol type='a' class='mb-2'><li>Kemungkinan tiap bagian tidak dapat diintegrasikan.</li><li>Dapat menjadi <i>build</i> and <i>Fix Model</i>, karena kemampuannya untuk selalu mendapat perubahan selama proses rekayasa berlangsung.</li><li>Harus <i>Open Architecture</i>.</li><li>Mungkin terjadi kesulitan untuk memetakan kebutuhan pengguna ke dalam rencana spesifikasi masing-masing hasil increment.</li><li>Membutuhkan waktu yang relatif lama untuk menghasilan produk yang lengkap.</li></ol>",
            ]

            var vshaped = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/vshaped.png",
                "<ol type='a' class='mb-2'><li><i>Business Case</i>, Merupakan tahapan awal yang menggambarkan kebutuhan/harapan konsumen terhadap sistem yang akan dikembangkan, termasuk manfaat sistem terhadap konsumen dan perkiraan biaya yang harus disediakan.</li><li><i>Requirement</i>, pada fase ini klien mendapatkan gambaran atau diminta memberikan gambaran kebutuhan yang diharapkan dapat dipenuhi oleh <i>software</i>, baik kebutuhan fungsional maupun non fungsional.</li><li>Analisis Informasi, setelah diperoleh spesifikasi sistem dari fase <i>requirement</i>, selanjutnya aktivitas difokuskan bagaimana cara kerja <i>software</i> untuk memenuhi kebutuhan tersebut, termasuk metode, <i>hardware</i> dan <i>software</i> apa saja yang diperlukan untuk mencapai kebutuhan yang sudah didefinisikan.</li><li>Perancangan Sistem, pada tahapan ini akan dibuat rancangan <i>software</i> secara lebih terinci sesuai spesifikasi yang sudah disepakati.</li><li><i>Unit Design</i>, merancang setiap elemen atau unit <i>software</i> termasuk rancangan modul atau program, antarmuka, <i>database</i> dan lain-lain.</li><li><i>Development</i>, merealisasikan hasil rancangan menjadi satu aplikasi atau program tertentu.</li></ol>",
                "<ol type='a' class='mb-2'><li>Setiap tahap memiliki penyampaian yang lebih spesifik.</li><li>Peluang sukses lebih tinggi dibanding dengan model <i>waterfall</i> karena metode pengembangan lebih matang dipersiapkan sejak awal rangkaian uji dimulai.</li><li>Waktu yang dibutuhkan dibandingkan model <i>waterfall</i> lebih sedikit bahkan waktu yang diperlukan bisa sampai 50% lebih sedikit.</li><li>Berfungsi dengan baik untuk proyek-proyek kecil dimana syarat dan kebutuhan mudah dipahami dan dimengerti.</li><li>Kegunaan sumber daya yang tinggi (efisien).</li><ol>",
                "<ol type='a' class='mb-2'><li>Terlalu kaku (kurangnya fleksibilitas).</li><li>Ruang lingkup yang dibutuhkan untuk penyesuaian model sulit dan mahal.</li><li>Piranti lunak dikembangkan selama tahap implementasi, sehingga tidak ada prototipe awal dari perangkat lunak yang dihasilkan.</li><li>Tidak memberikan jalan yang jelas untuk masalah yang ditemukan selama tahap pengujian.</li></ol>",
            ]

            var spiral = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/spiral.png",
                "Dalam penerapan Model Spiral, terdapat lima tahapan untuk merealisasikan penggunaannya, yaitu sebagai berikut :<ol type='a' class='mb-2'><li>Tahap Liason berhubungan dengan komunikasi antara pihak-pihak yang terlibat dalam pengembangan <i>softaware</i> (seperti: <i>system analyst</i> dengan pelanggan (<i>user</i>). Tujuannya adalah memperbaiki dan mengembangan <i>software</i> sesuai kebutuhan dan keinginan hingga memuaskan pelanggan.</li><li>Tahap planning meliputi estimasi biaya yang digunakan, batas waktu, pengaturan jadwal, identifikasi lingkungan kerja, sumber-sumber informasi untuk melakukan iterasi (Teknik perulangan). Hasil dari tahapan ini adalah dokumen spesifikasi kebutuhan sistem dan bisnis.</li><li>Tahap analisis risiko berfungsi untuk mengidentifikasi resiko yang berpotensi akan terjadi dan menghasilkan solusi alternatif secara teknis dan manajemen saat strategi mitigasi (upaya untuk mengurangi resiko bencana) direncanakan dan diselesaikan.</li><li>Tahap rekayasa (<i>engineering</i>) memiliki beberapa kegiatan ini yang akan dilakukan, yaitu:</li><ul><li>Menguji, <i>coding</i> dan mengembangkan <i>software</i></li><li>Menginstal <i>software</i></li><li>Membuat <i>prototype</i></li><li>Mendesain dokumen</li><li>Meringkas suatu pengujian <i>software</i></li><li>Membuat laporan atas kekurangan dari <i>software</i> agar segera diperbaiki</li><li>Tahap evaluasi</li></ul><li>Pada tahap evaluasi, <i>system analyst</i> membutuhkan masukan dan tanggapan dari para <i>user</i> dalam mengevaluasi perangkat atau produk yang diuji dan memastikan bahwa produk dibutuhkan sesuai ketentuan yang telah dibicarakan diawal dengan <i>user</i>. <i>System analyst</i> memastikan pelanggan puas dengan produk yang akan dihasilkan untuk menjawab persoalan bisnis mereka. Selain itu, <i>system analyst</i> harus tetap memantau resiko yang akan terjadi seperti faktor-faktor yang dapat menyebabkan <i>cost overrun</i> (pembengkakan biaya).</li></ol>",
                "<ol type='a' class='mb-2'><li>Pembangunan dan perubahan perangkat lunak yang terjadi dapat diselesaikan secara sistematis.</li><li>Mudah dalam mengestimasi biaya karena proses pembuatan <i>prototype</i> yang jelas dan terencana dalam tahapan yang sistematis</li><li>Manajemen dan analisa risiko yang lebih cepat dan mudah</li><li>Mudah dalam melakukan perubahan kebutuhan dan dokumentasi</li><li>Produksi software bisa terjadi lebih cepat</li></ol>",
                "<ol type='a' class='mb-2'><li>Tidak cocok dan sulit diimplementasikan dalam projek kecil</li><li>Memakan waktu yang cukup lama</li><li>Membutuhkan <i>best practice</i> atau pengalaman sebelumnya karena proses yang sangat kompleks</li><li>Resiko dalam tahap planning cukup besar. Misalnya terjadi perbedaan dalam jadwal pengembangan dan anggaran belanja.</li></ol>",
            ]

            var rad = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/rad.png",
                "<ol type='a' class='mb-2'><li><i>Requirement planning</i>, dalam tahap ini diketahui apa saja yan menjadi kebutuhan sistem yaitu dengan mengidentifikasikan kebutuhan informasi dan masalah yang dihadapi untuk menentukan tujuan, batasan-batasan sistem, kendala dan juga alternatif pemecahan masalah. Analisis digunakan untuk mengetahui perilaku sistem dan juga untuk mengetahui aktivitas apa saja yang ada dalam sistem tersebut.</li><li><i>Design workshop</i>, yaitu mengidentifikasi solusi alternatif dan memilih solusi yang terbaik. Kemudian membuat desain proses bisnis dan desain pemrograman untuk data-data yang telah didapatkan dan dimodelkan dalam arsitektur sistem informasi. <i>Tools</i> yang digunakan dalam pemodelan sistem biasanya menggunakan <i>unified modeling language</i> (uml).</li><li><i>Implentation</i>, setelah <i>design workshop</i> dilakukan, selanjutnya sistem diimplementasikan (<i>coding</i>) ke dalam bentuk yang dimengerti oleh mesin yang diwujudkan dalam bentuk program atau unit program. Tahap implementasi sistem merupakan tahap meletakkan sistem supaya siap untuk dioperasikan.</li></ol>",
                "<ol type='a' class='mb-2'><li>Membeli sistem yang baru memungkinkan untuk lebih menghemat biaya ketimbang mengembangkan sendiri.</li><li>Proses pengiriman menjadi lebih mudah, hal ini dikarenakan proses pembuatan lebih banyak menggunakan potongan-potongan <i>script</i>.</li><li>Mudah untuk diamati karena menggunakan model <i>prototype</i>, sehingga <i>user</i> lebih mengerti akan sistem yang dikembangkan.</li><li>Lebih fleksibel karena pengembang dapat melakukan proses desain ulang pada saat yang bersamaan.</li><li>Bisa mengurangi penulisan kode yang kompleks karena menggunakan <i>wizard</i>.</li><li>Keterlibatan user semakin meningkat karena merupakan bagian dari tim secara keseluruhan.</li><li>Mampu meminimalkan kesalahan-kesalahan dengan menggunakan alat-alat bantuan (<i>CASE tools</i>).</li><li>Mempercepat waktu pengembangan sistem secara keseluruhan karena cenderung mengabaikan kualitas</li><li>Tampilan yang lebih standar dan nyaman dengan bantuan <i>software-software</i> pendukung.</li></ol>",
                "<ol type='a' class='mb-2'><li>Dengan melakukan pembelian belum tentu bisa menghemat biaya dibandingkan dengan mengembangkan sendiri.</li><li>Membutuhkan biaya tersendiri untuk membeli peralatan-peralatan penunjang seperti misalnya <i>software</i> dan <i>hardware</i>.</li><li>Kesulitan melakukan pengukuran mengenai kemajuan proses.</li><li>Kurang efisien karena apabila melakukan pengkodean dengan menggunakan tangan bisa lebih efisien.</li><li>Ketelitian menjadi berkurang karena tidak menggunakan metode yang formal dalam melakukan pengkodean.</li><li>Lebih banyak terjadi kesalahan apabila hanya mengutamakan kecepatan dibandingkan dengan biaya dan kualitas.</li><li>Fasilitas-fasilitas banyak yang dikurangi karena terbatasnya waktu yang tersedia.</li><li>Sistem sulit diaplikasikan di tempat yang lain.</li><li>Fasilitas yang tidak perlu terkadang harus disertakan, karena menggunakan komponen yang sudah jadi, sehingga hal ini membuat biaya semakin meningkat.</li></ol>",
            ]

            var prototyping = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/prototyping.png",
                "<ol type='a' class='mb-2'><li><u>Mendengarkan Pelanggan.</u> Pada tahap ini dilakukan pengumpulan kebutuhan dari sistem dengan cara mendengar keluhan dari pelanggan. Untuk membuat suatu sistem yang sesuai kebutuhan, maka harus diketahui terlebih dahulu bagaimana sistem yang sedang berjalan untuk kemudian mengetahui masalah yang terjadi.</li><li><u>Merancang dan Membuat <i>Prototype</i>.</u> Pada tahapan ini, dilakukan perancangan dan pembuatan <i>prototype system</i>. <i>Prototype</i> yang dibuat disesuaikan dengan kebutuhan sistem yang telah didefinisikan sebelumnya dari keluhan pelanggan atau pengguna.</li><li><u>Uji Coba.</u> Pada tahap ini, <i>Prototype</i> dari sistem di uji coba oleh pelanggan atau pengguna. Lalu dilakukan evaluasi kekurangan - kekurangan dari kebutuhan pelanggan. Pengembangan kemudian kembali mendengarkan keluhan dari pelanggan untuk memperbaiki <i>Prototype</i> yang ada.</li></ol>",
                "<ol type='a' class='mb-2'><li>Adanya komunikasi yang baik antara pengembang dan pelanggan.</li><li>Pengembangan dapat bekerja baik dalam menentukan kebutuhan pelanggan.</li><li>Lebih menghemat waktu dalam pengembangan sistem</li><li>Penerapan lebih mudah karena pemakai mengetahui apa yang diharapkannya</li></ol>",
                "<ol type='a' class='mb-2'><li>Resiko tinggi yaitu untuk masalah - masalah yang tidak terstruktur dengan baik, ada perubahan yang besar dari waktu ke waktu dan adanya persyaratan data yang tidak menentu.</li><li>Interaksi pemakai penting. Sistem harus menyediakan dialog on-line antara pelanggan dan komputer.</li><li>Hubungan pelanggan dengan komputer yang disediakan mungkin tidak mencerminkan teknik perancangan yang baik.</li><ol>",
            ]

            var scrum = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/scrum.png",
                "<ol type='a' class='mb-2'><li><i>Backlog Grooming</i> merupakan tahap pertama yang harus dilakukan sebelum melakukan tahap-tahap <i>sprint</i> pada Scrum. <i>Meeting</i> ini dilakukan dengan tujuan memilih tahapan prioritas mana saja yang harus dilakukan selama pengerjaan <i>sprint</i>. <i>Backlog Grooming</i> wajib dihadiri oleh seluruh Scrum <i>Team</i>, yang meliputi <i>Product Owner</i>, Scrum <i>Master</i> dan <i>Development Team</i>. Keputusan tertinggi terletak pada <i>Product Owner</i>. Untuk itu <i>Development Team</i> harus mengetahui apa yang sebenarnya diinginkan oleh <i>Product Owner</i>.</li><li><i>Sprint Planning</i> merupakan <i>meeting</i> yang harus dilakukan setiap kali akan memulai <i>sprint</i> baru. Pada <i>meeting</i> ini Scrum <i>Team</i> merumuskan <i>task</i>-<i>task</i> apa saja yang akan dikerjakan pada 1 <i>sprint</i>. Perlu diperhatikan bahwa dalam 1 kali <i>sprint</i> yang penting bukan banyaknya <i>task</i> yang bisa dikerjakan, tetapi kemampuan <i>task</i> yang dapat dikerjakan dari <i>requirement</i> sampai dengan <i>testing</i> dalam 1 kali waktu <i>sprint</i> berjalan. Waktu <i>sprint</i> ideal berkisar 1-2 minggu, tetapi masih memungkinkan apabila <i>sprint</i> berjalan dalam waktu 1 bulan apabila scope <i>task</i>-nya cukup besar dan tidak dapat dipisah.</li><li><i>Daily</i> Scrum merupakan <i>meeting</i> yang dilakukan setiap hari pada pengerjaan <i>sprint</i>. Pada <i>meeting</i> ini anggota tim saling berbagai apa yang telah dikerjakan kemarin, apa yang akan dikerjakan hari ini, dan apa saja hambatan yang ditemui selama pengerjaan. Scrum <i>Master</i> harus memastikan seluruh anggota <i>Development Team</i> mengutarakan pendapatnya masing-masing.</li><li><i>Sprint Review</i> merupakan <i>meeting</i> yang dilakukan setelah 1 kali pengerjaan <i>sprint</i> selesai. <i>Meeting</i> ini dilakukan dengan cara mendemonstrasikan apa yang telah dicapai 1 <i>sprint</i>. Dalam hal ini Scrum <i>Team</i> mendemonstrasikan hasil pekerjaannya kepada <i>stakeholder</i> terkait. Apabila <i>stakeholder</i> memiliki masukan terkait hasil produk pada <i>sprint</i> terakhir, <i>stakeholder</i> dapat meminta meeting dengan <i>Scrum Team</i>.</li><li><i>Sprint Retrospective</i> merupakan <i>meeting</i> yang dilakukan pada terakhir 1 masa <i>sprint</i>. Pada <i>meeting</i> ini masing-masing anggota <i>Development Team</i> mengutarakan pendapat mereka terkait kinerja tim pada 1 <i>sprint</i> terakhir. Pendapat yang diutarakan lebih mengarah ke kemampuan komunikasi, pembagian tugas, tanpa membahas sisi teknis <i>project</i>.</li></ol>",
                "<ol type='a' class='mb-2'><li>SCRUM dapat membantu perusahaan Anda dalam menghemat waktu dan biaya (dalam hal ini uang). Biaya <i>overhead</i> dari proses dan manajemen sangat minim sehingga dapat mengarahkan kita kepada hasil yang lebih cepat dan lebih murah.</li><li>Dengan menggunakan metode SCRUM, Anda dapat mentranformasikan bisnis yang sulit untuk diukur menjadi mudah untuk dikembangkan.</li><li>Pada metode SCRUM, pergerakan pengembangan <i>cutting edge</i> dapat dengan cepat dikodekan dan diuji menggunakan metode ini. Bagaikan kesalahan yang mudah untuk diperbaiki.</li><li>Dengan menggunakan SCRUM, Anda dapat mengontrol dan me<i>monitoring</i> aktivitas peningkatan dan penurunan beban pekerjaan yang bisa terjadi kapan saja.</li><li>Seperti metodologi <i>agile</i> pada umumnya, SCRUM merupakan metode <i>iterative</i> yang membutuhkan <i>feedback</i> secara berkelanjutan dari <i>user</i> atau pengguna.</li><li>Dengan adanya <i>short sprint</i> dan <i>constant feedback</i>, SCRUM dapat dengan mudah mengatasi setiap perubahan yang terjadi.</li><li>Dengan adanya <i>daily</i> Scrum <i>meeting</i>, memungkinan SCRUM untuk mengukur produktvitas individu, hal ini mengarah pada peningkatan produktivitas dari setiap anggota tim.</li><li>Dengan SCRUM, setiap ada masalah yang timbul dapat di identifikasi dengan baik pada pertemuan harian dan oleh karena itu setiap masalah dapat di selesaikan dengan cepat.</li><li>Dengan menggunakan metode SCRUM, Anda dapat dengan mudah untuk mengirim produk berkualitas sesuai dengan waktunya.</li><li>SCRUM dapat bekerja dengan berbagai teknologi dan bahasa pemrograman. Namun secara khusus berguna untuk pengembangan proyek dengan teknologi web 2.0 ataupun media proyek baru lainnya.</li></ol>",
                "<ol type='a' class='mb-2'><li>SCRUM bisa menjadi salah satu penyebab utama terjadinya <i>scope creep</i>, kecuali ada tanggal akhir tertentu. Stakeholder proyek atau manajemen akan terus menuntut fungsi dan fitur baru untuk disampaikan.</li><li>Setiap tugas harus didefinisikan dengan baik, karena hal ini dapat mempengaruhi perkiraan biaya dan waktu pengerjaan proyek. Jika tidak didefinisikan dengan baik maka semua hal tersebut tidak akan akurat. Dalam kasus seperti ini, biasanya tugas dapat tersebar di beberapa <i>sprint</i>.</li><li>Jika anggota tim Anda tidak berkomitmen dengan baik, maka proyek Anda tidak akan selesai atau bahkan bisa gagal.</li><li>Metode SCRUM ini hanya membutuhkan anggota tim yang sudah berpengalaman, jika tim Anda berisi orang-orang yang masih pemula maka proyek tidak dapat selesai sesuai dengan waktunya.</li><li>SCRUM dapat bekerja dengan baik jika seorang Scrum <i>Master</i> dapat mempercayai tim yang mereka kelola. Jika Scrum Master terlalu mengontrol secara ketat, hal ini dapat menyebabkan tim menjadi tertekan dan stress, sehingga mengakibatkan demoralisasi dan kegagalan dari proyek tersebut.</li><li>Jika sering terjadi pergantian anggota tim saat pengembangan proyek berlangsung, hal ini dapat menyebabkan efek yang kurang baik bagi perkembangan proyek tersebut, proyek akan semakin lama selesai dari waktunya.</ol>",
            ]

            var extreme = [
                "https://raw.githubusercontent.com/naufalist/rpl/master/assets/metode/extreme.png",
                "<ol type='a' class='mb-2'><li><u><i>Planning</i> (Perencanaan)</u>. <br>Tahapan ini merupakan langkah awal dalam pembangunan sistem dimana dalam tahapan ini dilakukan beberapa kegiatan perencanaan yaitu, identifikasi permasalahan, menganalisa kebutuhan sampai dengan penetapan jadwal pelaksanaan pembangunan sistem.</li><li><u><i>Design</i> (Perancangan)</u>. <br>Tahapan berikutnya adalah perancangan dimana pada tahapan ini dilakukan kegiatan pemodelan yang dimulai dari pemodelan sistem, pemodelan arsitektur sampai dengan pemodelan basis data.</li><li><u><i>Coding</i> (Pengkodean)</u>. <br>Tahapan ini merupakan kegiatan penerapan pemodelan yang sudah dibuat kedalam bentuk <i>user interface</i> dengan menggunakan bahasa pemrograman.</li><li><u><i>Testing</i> (Pengujian)</u>. <br>Setelah tahapan pengkodean selesai, kemudian dilakukan tahapan pengujian sistem untuk mengetahui kesalahan apa saja yang timbul saat aplikasi sedang berjalan serta mengetahui apakah sistem yang dibangun sudah sesuai dengan kebutuhan pengguna.</li></ol>",
                "<ol type='a' class='mb-2'><li>Meningkatkan kepuasan kepada client.</li><li>Pembangunan sistem dibuat lebih cepat</li><li>Menjalin komunikasi yang baik dengan client.</li><li>Meningkatkan komunikasi dan sifat saling menghargai antara developer dan client.</li></ol>",
                "<ol type='a' class='mb-2'><li>Cerita-cerita yang menunjukkan <i>requirements</i> dari pelanggan kemungkinan besar tidak lengkap sehingga <i>developer</i> harus selalu siap dengan perubahan karena perubahan akan selalu diterima</li><li>Tidak bisa membuat kode yang detail di awal (prinsip <i>simplicity</i> dan juga anjuran untuk melakukan apa yang diperlukan hari itu juga).</li><li>XP tidak memiliki dokumentasi formal yang dibuat selama pengembangan. Satu-satunya dokumentasi adalah dokumentasi awal yang dilakukan oleh <i>user</i>.</li></ol>",
            ]

            switch (metodologi) {
                case "incremental":
                    var metode = incremental
                    break
                case "vshaped":
                    var metode = vshaped
                    break
                case "spiral":
                    var metode = spiral
                    break
                case "rapid application development":
                    var metode = rad
                    break
                case "prototyping":
                    var metode = prototyping
                    break
                case "scrum":
                    var metode = scrum
                    break
                case "extreme programming":
                    var metode = extreme
                    break
            }
            
            $("#metodologi .modal-title").html(metodologi.toUpperCase())
            $("#metodologi .modal-img").attr("src", metode[0])
            $("#metodologi .modal-ket").html(metode[1])
            $("#metodologi .modal-ket2").html(metode[2])
            $("#metodologi .modal-ket3").html(metode[3])
            $("#metodologi").modal()
        }
    </script>
</head>
<body">

    <!-- Navigation Bar -->
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

    <!-- Page Header -->
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

    <!-- Page Content -->
    <div class="container-fluid" style="margin-bottom: 100px;">
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div id="accordion">

                    <!-- Form -->
                    <div class="card mb-2 shadow-sm">
                        <div class="card-header font-weight-bold" id="headingOne">
                            <h5 class="mb-0 accortoggle">
                                <a role="button" class="collapsed" data-toggle="collapse" data-target="#formkpa" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-wpforms fa-sm"></i> Kenali Proyek Anda!
                                </a>
                            </h5>
                        </div>
                        <div id="formkpa" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <button type="reset" class="btn btn-warning btn-md float-right">
                                            <i class="fa fa-refresh fa-md"></i> Bersihkan
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <label>Kebutuhan Awal</label>
                                        <select name="kebutuhan_awal" class="form-control" required>
                                            <option value="" selected disabled>-- Kebutuhan Awal --</option>
                                            <option value="dapat dijelaskan">Dapat dijelaskan</option>
                                            <option value="belum jelas">Belum jelas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kompleksitas</label>
                                        <select name="kompleksitas" class="form-control" required>
                                            <option value="" selected disabled>-- Kompleksitas --</option>
                                            <option value="sederhana">Sederhana</option>
                                            <option value="kompleks">Kompleks</option>
                                            <option value="sangat kompleks">Sangat Kompleks</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Delivery</label>
                                        <select name="waktu_delivery" class="form-control" required>
                                            <option value="" selected disabled>-- Waktu Delivery --</option>
                                            <option value="< 1 bulan">< 1 bulan</option>
                                            <option value="1 - 3 bulan">1 - 3 bulan</option>
                                            <option value="4 - 6 bulan">4 - 6 bulan</option>
                                            <option value="6 - 12 bulan">6 - 12 bulan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Tim (SDM)</label>
                                        <select name="jumlah_tim" class="form-control" required>
                                            <option value="" selected disabled>-- Jumlah Tim (SDM) --</option>
                                            <option value="< 12 orang">< 12 orang</option>
                                            <option value="> 12 orang">> 12 orang</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterampilan Tim</label>
                                        <select name="keterampilan_tim" class="form-control" required>
                                            <option value="" selected disabled>-- Keterampilan Tim --</option>
                                            <option value="berpengalaman">Berpengalaman</option>
                                            <option value="campuran">Campuran</option>
                                            <option value="tidak berpengalaman">Tidak Berpengalaman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Klien Terlibat Langsung</label>
                                        <select name="klien_terlibat_langsung" class="form-control" required>
                                            <option value="" selected disabled>-- Klien Terlibat Langsung --</option>
                                            <option value="terlibat">Terlibat</option>
                                            <option value="tidak terlibat">Tidak Terlibat</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <button type="submit" name="subform" class="btn btn-primary btn-md">
                                        <i class="fa fa-paper-plane fa-md"></i> Cek Metodologi
                                    </button>
                                    <button type="reset" class="btn btn-warning btn-md float-right">
                                        <i class="fa fa-refresh fa-md"></i> Bersihkan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Hasil -->
                    <div class="card mb-2 shadow-sm">
                        <div class="card-header font-weight-bold" id="headingOne">
                            <h5 class="mb-0 accortoggle">
                                <a role="button" class="collapsed" data-toggle="collapse" data-target="#result" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fa fa-sticky-note fa-sm"></i> Hasil
                                </a>
                            </h5>
                        </div>
                        <div id="result" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">                            
                                <?php
                                // echo "<script>$(\"#anggotaKelompok\").modal();</script>";
                                // echo '<script>hide("form");</script>';
                                // echo '<script>show("accordion-Result");</script>';

                                if (isset($_POST["subform"])) {
                                    $data = [
                                        "kebutuhan_awal" => $_POST["kebutuhan_awal"],
                                        "kompleksitas" => $_POST["kompleksitas"],
                                        "waktu_delivery" => $_POST["waktu_delivery"],
                                        "jumlah_tim" => $_POST["jumlah_tim"],
                                        "keterampilan_tim" => $_POST["keterampilan_tim"],
                                        "klien_terlibat_langsung" => $_POST["klien_terlibat_langsung"]
                                    ];

                                    $response = cekKarakter($data);

                                    echo '
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Metodologi</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>';

                                    $i = 1;
                                    foreach ($response as $metode => $poin) {
                                        if ($poin !== 0) {
                                            echo '<tr>
                                                    <th scope="row">'.$i++.'</th>
                                                    <td>'.ucwords($metode).' ('.$poin.')</td>
                                                    <td>
                                                    <button class="btn btn-primary btn-sm btn-block" onclick="metodologi(\''.strtolower($metode).'\')" type="button" ><i class="fa fa-search fa-sm"></i> Detail</button>
                                                    </td>
                                                </tr>';
                                        }
                                    }

                                    echo '
                                        </tbody>
                                    </table';
                                    // print_r($response);

                                } else {
                                    echo "Mau liat apa? formnya aja belum diisi 🤭";
                                }

                                ?>
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
                    <h5 class="modal-title">Kelompok RPL | TEK3AP1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <em class="font-weight-bold mb-2">Dosen Pengajar</em>
                        <li class="list-group-item align-items-center py-1 mb-2">

                        <div class="row mb-2">
                            <div class="col-3">
                                <img class="rounded-circle" width="70" height="auto" src="https://i1.rgstatic.net/ii/profile.image/803605019889664-1568605775263_Q512/Sofiyanti_Indriasari.jpg" alt="">
                            </div>
                            <div class="col text-center">
                                <div class="mt-2">
                                    Sofiyanti Indriasari S.Kom., M.Kom.
                                    <span class="badge badge-success badge-pill">201807198410052001</span>
                                </div>
                            </div>
                        </div>

                        </li>
                        <em class="font-weight-bold mb-2">Mahasiswa</em>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://instagram.fbkk22-3.fna.fbcdn.net/v/t51.2885-15/e35/51800016_131315894589066_7074515133296752609_n.jpg?_nc_ht=instagram.fcgk18-2.fna.fbcdn.net&_nc_cat=106&_nc_ohc=7MN7QBN_9jYAX_7nKl9&oh=95871422dcc2507d59730b95cab4454e&oe=5F88A4B3&dl=1%22" alt="">
                        Nurmala Ameliana
                            <span class="badge badge-primary badge-pill">J3D118040</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://media-exp1.licdn.com/dms/image/C5103AQHfPBtf7y3dcA/profile-displayphoto-shrink_200_200/0?e=1605744000&v=beta&t=J6hZVSlz749sEwX331cznqOrRt4F3--zfpk_YzK9EY0" alt="">
                        Muhammad Naufal Wafi
                            <span class="badge badge-primary badge-pill">J3D118042</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-19/55818892_288677668691997_2243833276416393216_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_ohc=Lcl5sU22TikAX92SkaV&oh=259c74bf20b2c9358cb04c472b1477e6&oe=5F869145" alt="">
                        Sagita Hapsari
                            <span class="badge badge-primary badge-pill">J3D118044</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://instagram.fcgk18-2.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/116362839_948588925616754_7107950940090825884_n.jpg?_nc_ht=instagram.fcgk18-2.fna.fbcdn.net&_nc_cat=106&_nc_ohc=mhA26cpnXcIAX_cs2z-&oh=02240acfe806f739fe964231bda389eb&oe=5F885E9D" alt="">
                        Nazla Bella Fadilah
                            <span class="badge badge-primary badge-pill">J3D118046</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-19/80818298_108582537259608_1390559558308462592_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_ohc=L0BudzwhfFkAX9sQawr&oh=8003399e725a100d1af35ec3a2e8e05a&oe=5F887438" alt="">
                        Arvy Adhitya Sutisna
                            <span class="badge badge-primary badge-pill">J3D118047</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://media-exp1.licdn.com/dms/image/C5603AQHs4OIV4HeDbQ/profile-displayphoto-shrink_200_200/0?e=1605744000&v=beta&t=3zAqm4MswUmP0NjxfLsA6E4okVf4K5y_xX8leLp_gpc" alt="">
                        Sendy Cahyono
                            <span class="badge badge-primary badge-pill">J3D118048</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center py-1">
                        <img class="rounded-circle" width="40" height="auto" src="https://scontent-vie1-1.cdninstagram.com/v/t51.2885-19/116992864_111603097198660_5171442987820783900_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com&_nc_ohc=dpaLWilBUe4AX8B2dX_&oh=e7d33048797bef6a469b1f1bfa1752ef&oe=5F88472C" alt="">
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
    
    <div class="modal fade" id="metodologi" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="container">
                    <div class="modal-header">
                        <h5 class="modal-title">Metodologi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group list-group-flush">
                            <em class="font-weight-bold mb-2">Alur Metodologi</em>
                            <div class="text-center">
                                <img width="300" height="auto" src="" class="rounded modal-img" alt="modal-img">
                            </div>
                            <em class="font-weight-bold mb-2">Penjelasan</em>
                            <div class="modal-ket">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam deserunt quibusdam ducimus consectetur expedita fuga iste fugit eum voluptate vel explicabo asperiores nostrum, similique ipsa a dicta distinctio aut impedit!</p>
                            </div>
                            <em class="font-weight-bold mb-2">Kelebihan</em>
                            <div class="modal-ket2">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>consectetur, adipisicing elit</li>
                                    <li>Totam deserunt quibusdam</li>
                                </ul>
                            </div>
                            <em class="font-weight-bold mb-2">Kekurangan</em>
                            <div class="modal-ket3">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>consectetur, adipisicing elit</li>
                                    <li>Totam deserunt quibusdam</li>
                                </ul>
                            </div>
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
                <div class="col-6 text-right"> Version <strong> 20200911.5 </strong>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <?php
        if (isset($_POST["subform"])) {
            echo "<script>document.getElementById(\"formkpa\").classList.remove(\"show\");</script>";
            echo "<script>document.getElementById(\"result\").classList.add(\"show\");</script>";
        }
    ?>
  </body>
</html>
