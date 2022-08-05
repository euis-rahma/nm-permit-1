<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['role']) == false) {
    header("location:../");
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Permit | Beranda</title>

    <link href="../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../asset/img/logo-mini.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body id="page-top" style="font-family: bahnschrift light;">
    <div id="wrapper">
        <div class="sidebar">
            <ul class="navbar-nav putih sidebar sidebar-light accordion" id="accordionSidebar">
                <div class="img-fluid sidebar-brand d-flex align-items-center justify-content-center my-2 flex-column">
                    <img class="logo" src="../../asset/img/Logo Smart.png">
                </div>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                    <a class="nav-link" href="../dashboard">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-10 "><i class="fas fa-fw fa-book"></i>
                                    Administrasi
                                </div>
                                <div class="col-2 "><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="administrasi/cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="administrasi/absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="administrasi/imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="administrasi/dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="administrasi/dinasluar/">Izin Dinas Luar</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-10"><i class="fas fa-fw fa-user-check"></i>
                                    Persetujuan
                                </div>
                                <div class="col-2"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="persetujuan/masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="persetujuan/cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="persetujuan/absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="persetujuan/imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="persetujuan/dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="persetujuan/dinasluar/">Menyetujui Izin Dinas Luar</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-10"><i class="fas fa-fw fa-box"></i>
                                    Produksi
                                </div>
                                <div class="col-2"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../Data_Stock/Dashboard/tables.php">Data Stock</a></li>
                            <li><a class="dropdown-item" href="../../../smart_qi/dashboardd/index.php">Dashboard Produksi</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Harian produksi</a></li>
                            <li><a class="dropdown-item" href="#">Total Productive Maintenance</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-10"><i class="fas fa-fw fa-chair"></i>
                                    Fasilitas
                                </div>
                                <div class="col-2"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="#">Kendaraan Kantor</a></li>
                            <li><a class="dropdown-item" href="#">Pakaian Kerja</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="SOP.html">
                        <i class="fas fa-fw fa-file"></i>
                        <span>SOP</span></a>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="IK.html">
                        <i class="fas fa-fw fa-archive"></i>
                        <span>IK</span>
                    </a>
                </li>

                <hr class="sidebar-divider my-0">

                <div class=" dropend nav-item">
                    <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="row">
                            <div class="col-10"><i class="fas fa-fw fa-download"></i>
                                Download
                            </div>
                            <div class="col-2"><i class="fa-reguler fa-greater-than "></i></div>
                        </div>
                    </a>


                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="download/cuti/">Pengajuan CUTI</a></li>
                        <li><a class="dropdown-item" href="download/absensi/">Keterangan Absensi</a></li>
                        <li><a class="dropdown-item" href="download/imp/">Izin Meninggalkan Pekerjaan</a></li>
                        <li><a class="dropdown-item" href="download/dispensasi/">Dispensasi</a></li>
                        <li><a class="dropdown-item" href="download/dinasluar/">Izin Dinas Luar</a></li>
                    </ul>
                </div>

                <hr class="sidebar-divider my-0">

                <div class="container my-auto text-left">
                    <div class="copyright text-center font-italic">
                        <span class="small">&copy; P.E - Digitalization - 2022 </span>
                    </div>
                </div>
            </ul><!-- End of Sidebar -->
        </div><!-- End of Class Sticky sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="topbar">
                <nav class="navbar navbar-expand navbar-light biru topbar mb-2 shading">
                    <ul class="navbar-nav ml-auto">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle ml-1 mt-3">
                            <i class="fa fa-bars text-white text-xs"></i>
                        </button>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="../../asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <p class="dropdown-item text-center">
                                    <?= $_SESSION['nama'] ?>
                                </p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="change">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i><span> Ubah Password</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i><span> Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav><!-- End of Topbar -->
            </div>

            <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">
                <div class="container-fluid">
                    <h3>R u b a h &ensp; P a s s w o r d &ensp; L o g i n </h3>
                    <div class="row">
                        <div class="col-12 col-lg-12 card">

                        </div>
                        <div class="col-12 col-lg-12 card mt-5">
                            <img src="../../asset/img/Logo NM New1.png" style="max-width:400px; max-height:190px; margin-top:20px;" />
                            <form class="myForm" action="" method="POST">
                                <div class="form-group mt-5" style="max-width:500px">
                                    <label for="password_lama">Passowrd lama</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>

                                <div class="form-group" style=" max-width:500px">
                                    <label for="password_baru">Passowrd Baru</label>
                                    <input class="form-control" type="password" name="new_password" required>
                                </div>

                                <div class="form-group" style=" max-width:500px">
                                    <label for="password_baru1">Konfirmasi passowrd baru</label>
                                    <input class="form-control" type="password" name="new_password1" required>
                                </div>

                                <button type="submit" class="btn btn-info mt-2 mb-3 fa-solid fa-pencil" name="change" value="Change">&ensp;S i m p a n</button>


                            </form>
                            <?php

                            include '../../koneksi.php';

                            if (isset($_POST['change'])) {
                                $password = $_POST['password'];
                                $new_password = $_POST['new_password'];
                                $con_password = $_POST['new_password1'];
                                if ($new_password == $con_password) {
                                    $cekuser = mysqli_query($conn, "SELECT * FROM karyawan WHERE nama='$_SESSION[nama]' AND password='$password'");
                                    $hitung = mysqli_num_rows($cekuser);
                                    if ($hitung > 0) {
                                        $updatepass = mysqli_query($conn, "UPDATE karyawan SET password='$new_password' WHERE password='$password' AND nama='$_SESSION[nama]'");

                                        //ketika berhasil tampilkan echo dsni
                                        echo "<script>alert('Pergantian Password Succes, Silahkan Re-login.');
                                             document.location.href='change';</script>";
                                    } else {
                                        echo "<script>alert('Pergantian Password Gagal Silahkan coba lagi.');
                                             document.location.href='change';</script>";
                                    }
                                } else {
                                    echo "<script>alert('Password Baru Tidak Sama.');
                                document.location.href='change';</script>";
                                }
                            };



                            ?>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
            </div><!-- End of Content wrapper -->
        </div><!-- End of Page Wrapper -->
        <!-- Bootstrap core JavaScript-->
        <script src="../../asset/style/js/jquery.min.js"></script>
        <script src="../../asset/style/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../asset/style/js/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../asset/style/js/sb-admin-2.min.js"></script>
        <script src="../../asset/style/js/file.js"></script>

        <!-- Scripts For Icon-->
        <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>

</body>

</html>