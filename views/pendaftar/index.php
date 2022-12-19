<?php

    session_start();
    include "../../controller/connect.php";
    $query = mysqli_query($connect, "SELECT * FROM countdown");
    $data = mysqli_fetch_array($query);
    $data['tanggal'];
    if ($_SESSION['login'] != 'true') {
        header('location:../auth/login.php');
    } elseif ($data['tanggal'] == date('Y-m-d')) {
        header('location:tutup.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Calon Pegawai Baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <style>
        .jumbotron {
            background: white;
        }

        /* nav {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: "";
            display: block;
            height: 420px;
            width: 100%;
            background: linear-gradient(to top, black, rgba(0, 0, 0, 0));
            position: absolute;
            top: 0;
            left: 0;
        } */

        @media (max-width:768px) {
            .jumbotron {
                background-position-y: 0px;
            }

            .container .row div {
                text-align: center !important;
                margin-bottom: 20px;
            }
        }

        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }

        .btn-warning {
            box-shadow: 0 18px 40px -12px #ffc107;
        }

        .btn-secondary {
            box-shadow: 0 18px 40px -12px #6c757d;
        }

        .btn-danger {
            box-shadow: 0 18px 40px -12px #dc3545;
        }
    </style>
</head>

<body>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow" style="width:100%">
        <div class="container">
            <a class="navbar-brand">
                <img src="../../assets/img/logo.png" width="30" height="30" alt="logosmk">
                <span class="align-middle">Kementrian Kelautan dan Perikanan</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?daftarsiswa">Pengumuman</a>
                    </li>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown"><?= $_SESSION['nama'] ?></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="?profil"><i class="fa fa-user mr-2"></i>Profil</a>
                    <a class="dropdown-item" href="../../controller/auth.php"><i class="fa fa-sign-out-alt mr-2"></i>Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
        <?php

        if(isset($_GET['beranda'])) {
            include "beranda.php";
        } elseif(isset($_GET['pendaftaran'])) {
            $id = $_SESSION['id'];
            $nama = $_SESSION['nama'];
            $cekblacklist = mysqli_query($connect, "SELECT * FROM blacklist WHERE id_user='$id' AND nama='$nama'");
            $data = mysqli_fetch_array($cekblacklist);
            if ($data > 0) {
                include "blacklist.php";
            } else {
                include "pendaftaran.php";
            }
        } elseif(isset($_GET['daftarsiswa'])) {
            $id = $_SESSION['id'];
            $cekstatus = mysqli_query($connect, "SELECT * FROM pendaftar WHERE id='$id'");
            $data = mysqli_fetch_array($cekstatus);
            if ($data < 1) {
                include "belumdaftar.php";
            } elseif ($data['status'] == '0') {
                include "menunggu.php";
            } elseif ($data['status'] == '1') {
                include "daftarcalonpegawai.php";
            } else {
                include "blacklist.php";
            }
        } elseif(isset($_GET['profil'])) {
            include "profile.php";
        } else {
            include "beranda.php";
        }

        ?>
    </main>
    <!-- END CONTENT -->

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>