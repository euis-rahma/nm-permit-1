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
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "91e90f0f-7547-47aa-9f8e-7809c28e3d7d",
            });
            OneSignal.showNativePrompt();
            OneSignal.sendTag("role", "<?php echo $_SESSION['role'] ?>")
            OneSignal.sendTag("seksi", "<?php echo $_SESSION['seksi'] ?>")
            OneSignal.sendTag("departemen", "<?php echo $_SESSION['departemen'] ?>")
            OneSignal.sendTag("divisi", "<?php echo $_SESSION['divisi'] ?>")
            OneSignal.getUserId(function(userId) {
                console.log("OneSignal User ID:", userId);
            });
        });
    </script>

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
                    <div class="row ">
                        <div class="col col-12 col-sm-4  p-0 ">
                            <!-- PROFILE SINGKAT -->
                            <div class="card mb-2 tumpul shading pb-4">
                                <div class="row-cols-sm-2 img-fluid my-lg-2 pt-3 p-5 p-lg-2">
                                    <img class="img-thumbnail rounded-circle mx-auto d-block" src="../../asset/img/undraw_profile.svg">
                                </div>
                                <div class="row-2 card-body">
                                    <h6 class="font-weight-bolder text-center text-uppercase"><?= $_SESSION['nama']; ?></h6>
                                    <P class="mt-1 mb-lg-4 text-center text-uppercase"><?= $_SESSION['nrp']; ?></P>
                                    <div class="smol">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Jabatan</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['jabatan']; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Seksi</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['seksi']; ?></div>
                                        </div>
                                        <div class="row  mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Departemen</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['departemen']; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 col-lg-4 font-weight-bolder">Divisi</div>
                                            <div class="col-12 col-lg-8 text-uppercase"><?= $_SESSION['divisi']; ?></div>
                                        </div>
                                    </div>
                                    <div class="row-cols-1 text-center justify-content-center my-4">
                                        <a href="#" class="btn btn-primary btn-icon-split btn-sm btn-biru" style="width: 6rem;" data-toggle="modal" data-target="#profilModal">
                                            <span class="text">Cek Profil</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE SINGKAT -->
                        <div class="col col-12 col-sm-8 ">
                            <div class="row ">
                                <div class="col col-12  p-0 pl-sm-3 ">
                                    <h5>BERITA TERKINI</h5>
                                    <!-- CAROSEL GAMBAR -->
                                    <div id="demo" class="carousel slide shading" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ul class="carousel-indicators">
                                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                                            <li data-target="#demo" data-slide-to="1"></li>
                                            <li data-target="#demo" data-slide-to="2"></li>
                                            <li data-target="#demo" data-slide-to="3"></li>
                                            <li data-target="#demo" data-slide-to="4"></li>
                                        </ul>

                                        <!-- The slideshow -->
                                        <div class="carousel-inner w-100  rounded-top shading">
                                            <div class="carousel-item active">
                                                <img src="../../asset/img/Slide1.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide2.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide3.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide4.PNG" alt="" class="d-block w-100 h-100 shading">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../asset/img/Slide5.PNG" class="d-block w-100 h-100 shading">
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next" style="z-index: 0;">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>

                                    </div>
                                    <!-- END CAROSEL GAMBAR -->
                                </div>
                                <div class="col col-12 p-0 pl-sm-3">
                                    <!-- BRITHDAY  -->
                                    <div class="kotak tumpul-bawah shading flex-column ">
                                        <div class="row-cols-md-1">
                                            <div class="col-sm-2 mt-3  text-center pb-4 pb-sm-2">
                                                <div class="nav-link text-left">
                                                    <i class="fas fa-fw fa-birthday-cake mr-2"></i>
                                                    <span>Selamat Ulang Tahun</span>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table-bordered smol " width="100%" cellspacing="0">
                                                        <thead class="kuning">
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>NRP</th>
                                                                <th>NAMA</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <?php
                                                                require '../../koneksi.php';
                                                                $sql = mysqli_query($conn, "SELECT * FROM karyawan WHERE date_format(tanggal_lahir,'%m-%d')=date_format(now(),'%m-%d');");
                                                                $no = 1;
                                                                while ($tampil = mysqli_fetch_array($sql)) {
                                                                ?>

                                                                    <td style="text-align: center;"><?= $no ?></td>
                                                                    <td><?= $tampil['nrp']; ?></td>
                                                                    <td><?= $tampil['nama']; ?></td>
                                                            </tr>
                                                        <?php $no++;
                                                                } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END BRITHDAY -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div><!-- End of Page Wrapper -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih "Logout" untuk keluar dari halaman ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../proses/proses_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Profil Modal-->
    <div class="modal fade " id="profilModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profil Karyawan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body ">
                    <div class="smol ml-2 p-2">
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder">Nama</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['nama']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder">NRP</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['nrp']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Jabatan</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['jabatan']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Seksi</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['seksi']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Departemen</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['departemen']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Divisi</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['divisi']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Email Kantor</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['email_kantor']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Email Pribadi</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['email_pribadi']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 col-lg-3 font-weight-bolder ">Alamat </div>
                            <div class="col-12 col-lg-9 text-justify">Jalan Pegangsaan Dua Km 2, 1, Pegangsaan Dua, Kelapa Gading, RW.3, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah
                                Kelapagading, Daerah Khusus Ibukota Jakarta</div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-3 font-weight-bolder ">No Telp</div>
                            <div class="col-12 col-lg-9 ">+62 289283928</div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-3 font-weight-bolder ">Ukuran Baju</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['uk_baju']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-3 font-weight-bolder ">Ukuran Celana</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['uk_celana']; ?></div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-3 font-weight-bolder ">Ukuran Sepatu</div>
                            <div class="col-12 col-lg-9 "><?= $_SESSION['uk_sepatu']; ?></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" style="width: 6rem;" data-dismiss="modal">Tutup</button>
                    <!-- <a class="btn btn-primary fas fa-pencil-alt fa-sm fa-fw" type="button" style="width: 6rem;" href="index.php?y=<?= $_SESSION['nrp']; ?>">Ubah</a> -->
                </div>
            </div>
        </div>
    </div>

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