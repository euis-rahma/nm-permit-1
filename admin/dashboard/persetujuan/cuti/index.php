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

    <title>Cuti | Persetujuan</title>

    <link href="../../../../asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    <link href="../../../../asset/style/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../asset/style/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../../asset/img/logo-mini.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->



</head>

<body id="page-top" style="font-family: bahnschrift light; color:black;">
    <div id="wrapper">
        <div class="sidebar">
            <ul class="navbar-nav putih sidebar sidebar-light accordion" id="accordionSidebar">
                <div class="img-fluid sidebar-brand d-flex align-items-center justify-content-center my-2 flex-column">
                    <img class="logo" src="../../../../asset/img/Logo Smart.png">
                </div>
                <hr class="sidebar-divider my-0">

                <li class="nav-item ">
                    <a class="nav-link" href="../../../dashboard">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <hr class="sidebar-divider my-0">

                    <div class=" dropend nav-item">
                        <a type="button" class="  nav-link " data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="row">
                                <div class="col-10"><i class="fas fa-fw fa-book"></i>
                                    Administrasi
                                </div>
                                <div class="col-2"><i class="fa-reguler fa-greater-than "></i></div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../administrasi/cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../../administrasi/dinasluar/">Izin Dinas Luar</a></li>
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
                            <li><a class="dropdown-item" href="../masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="../cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="../absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../dinasluar/">Menyetujui Izin Dinas Luar</a></li>
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
                            <li><a class="dropdown-item" href="../../../../../Data_Stock/Dashboard/tables.php">Data Stock</a></li>
                            <li><a class="dropdown-item" href="../../../../../smart_qi/dashboardd/index.php">Dashboard Produksi</a></li>
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
                            <li><a class="dropdown-item" href="../../fasilitas/Rmeeting">Ruang Meeting</a></li>
                            <li><a class="dropdown-item" href="../../fasilitas/Kendaraan">Kendaraan Kantor</a></li>
                            <li><a class="dropdown-item" href="../../fasilitas/Seragam">Pakaian Kerja</a></li>
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
                        <li><a class="dropdown-item" href="../../download/cuti/">Pengajuan CUTI</a></li>
                        <li><a class="dropdown-item" href="../../download/absensi">Keterangan Absensi</a></li>
                        <li><a class="dropdown-item" href="../../download/imp">Izin Meninggalkan Pekerjaan</a></li>
                        <li><a class="dropdown-item" href="../../download/dispensasi">Dispensasi</a></li>
                        <li><a class="dropdown-item" href="../../download/dinasluar">Izin Dinas Luar</a></li>
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
                                <img class="img-profile rounded-circle" src="../../../../asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <p class="dropdown-item text-center">
                                    <?= $_SESSION['nama'] ?>
                                </p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../change.php">
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
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anda Ingin Keluar</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                        </div>
                        <div class="modal-body">Silahkan pilih "Logout" untuk keluar dari halaman ini.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../../../proses/proses_logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END logut Modal-->

            <!--  MAIN CONTENT-->
            <div id="content" class="mt-5 mt-lg-5 px-0 pt-3">

                <div class="container-fluid">
                    <h3>C U T I </h3>

                    <div class="row">
                        <div class="col card-body tumpul bg-light-biru text-primary" style="background-color: #bdd7ee ;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; a d a l a h &ensp; d a f t a r &ensp; P e r m i n t a a n &ensp; P e r s e t u j u a n &ensp; C u t i</span>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 card tumpul table-borderless">
                            <table id="datatablesSimple" class="table table-hover table-responsive border" style="color:black">
                                <thead class="table-info">
                                    <tr>
                                        <th>NO</th>
                                        <th>NRP</th>
                                        <th>NAMA</th>
                                        <th>SEKSI</th>
                                        <th>DEPARTEMEN</th>
                                        <th>DIVIS</th>
                                        <th>JUMLAH CUTI (HARI)</th>
                                        <th>JENIS CUTI</th>
                                        <th>TANGGAL MULAI</th>
                                        <th>TANGGAL SELESAI</th>
                                        <th>KEPERLUAN</th>
                                        <th>LAMPIRAN</th>
                                        <th>STATUS</th>
                                        <th colspan="2">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    error_reporting(1);
                                    $query = "SELECT * FROM cuti a INNER JOIN karyawan b ON a.nrp=b.nrp WHERE a.approval='$_SESSION[role]'";
                                    if ($_SESSION['role'] == '0' || $_SESSION['role'] == '1') {
                                        $qWhere = "AND b.seksi = '$_SESSION[seksi]' ";
                                    } else if ($_SESSION['role'] == '2') {
                                        $qWhere = "AND b.departemen ='$_SESSION[departemen]'";
                                    } else if ($_SESSION['role'] == '3') {
                                        $qWhere = "AND b.divisi = '$_SESSION[divisi]' ";
                                    }
                                    $mergeQuery = $query . $qWhere;
                                    // $mergeQuery = ("SELECT * FROM cuti a INNER JOIN karyawan b ON a.nrp=b.nrp WHERE a.approval='3'AND b.divisi = 'ENGINEERING';");
                                    $ambildata = mysqli_query($conn, $mergeQuery);
                                    // echo $mergeQuery;



                                    while ($tampil = mysqli_fetch_array($ambildata)) {
                                        $approval = $tampil['approval'];
                                        if ($approval == 0) {
                                            $status = 'Menunggu Approval Staff';
                                        } else if ($approval == 1) {
                                            $status = 'Menunggu Approval Kasie';
                                        } else if ($approval == 2) {
                                            $status = 'Menunggu Approval DeptHead';
                                        } else if ($approval == 3) {
                                            $status = 'Menunggu Approval DivHead';
                                        } else if ($approval == 4) {
                                            $status = 'Menunggu Approval COO';
                                        } else if ($approval == 5) {
                                            $status = "<p style='color:green'> Cuti Anda Sudah Disetujui </p>";
                                        } else if ($approval == 10) {
                                            $status = "<p style='color:red'> Cuti Anda Ditolak </p>";
                                        }
                                    ?>

                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $tampil['nrp'] ?></td>
                                            <td><?php echo $tampil['nama'] ?></td>
                                            <td><?php echo $tampil['seksi'] ?></td>
                                            <td><?php echo $tampil['departemen'] ?></td>
                                            <td><?php echo $tampil['divisi'] ?></td>
                                            <td><?php echo $tampil['jumlah_cuti'] ?></td>
                                            <td><?php echo $tampil['jenis_cuti'] ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_mulai"])); ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_selesai"])); ?></td>
                                            <td><?php echo $tampil['keperluan'] ?></td>
                                            <td><img src="../../administrasi/lampiran/<?= $tampil['lampiran']; ?>" style="max-width:100px; max-height:100px"></td>
                                            <td><?php echo $status ?></td>
                                            <td style="text-align: center;"><a href='index.php?kode=<?php echo $tampil['id'] ?>& req=<?php echo $tampil['role'] ?>'><i class="btn fa-solid fa-check" style="background-color:green; color: white; height: 30px;" onclick="return confirm('Yakin Untuk Mengizinkan?');"></i></a> </td>
                                            <td style="text-align: center;"><a href='index.php?kode1=<?php echo $tampil['id'] ?>& req=<?php echo $tampil['role'] ?>'><i class="btn fa-solid fa-x" style="background-color:red; color: white; height: 30px;" onclick="return confirm('Yakin Untuk Menolak?');"></i></a> </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                                <script>
                                    $(document).ready(function() {
                                        $('#example').DataTable({
                                            scrollX: true,
                                        });
                                    });
                                </script>

                                <!-- approval -->
                                <?php
                                include "../../../../koneksi.php";

                                $from = $_SESSION['role'];
                                $numprove = $from + 1;



                                if (isset($_GET['kode'])) {

                                    if ($_SESSION['role'] == 2) {
                                        if ($_GET['req'] == 0) {
                                            mysqli_query($conn, "UPDATE cuti SET approval=5 WHERE id='$_GET[kode]'");
                                            echo "<script>alert('Data sudah Approval..!!');
                                             document.location.href='../cuti';</script>";
                                        }
                                    } else if ($_SESSION['role'] == 3) {
                                        if ($_GET['req'] == 1) {
                                            mysqli_query($conn, "UPDATE cuti SET approval=5 WHERE id='$_GET[kode]'");
                                            echo "<script>alert('Data sudah Approval..!!');
                                             document.location.href='../cuti';</script>";
                                        } else if ($_GET['req'] == 2) {
                                            mysqli_query($conn, "UPDATE cuti SET approval=5 WHERE id='$_GET[kode]'");
                                            echo "<script>alert('Data sudah Approval..!!');
                                             document.location.href='../cuti';</script>";
                                        }
                                    }
                                }

                                ?>

                                <!-- DECLINE -->
                                <?php
                                include "../../../../koneksi.php";

                                if (isset($_GET['kode1'])) {
                                    mysqli_query($conn, "UPDATE cuti SET approval=10 , jumlah_cuti=0 WHERE id='$_GET[kode1]'");
                                    echo "<script>alert('Cuti Berhasil Ditolak..!!');
                                             document.location.href='../cuti';</script>";
                                } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div><!-- End of Content wrapper -->
    </div><!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="../../../../asset/style/js/jquery.min.js"></script>
    <script src="../../../../asset/style/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../asset/style/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../asset/style/js/sb-admin-2.min.js"></script>
    <script src="../../../../asset/style/js/file.js"></script>
    <script src="../../../../asset/style/js/datatables-simple-demo.js"></script>
    <script src="../../../../asset/style/js/scripts.js"></script>
    <!-- Scripts For Icon-->
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>



</body>

</html>