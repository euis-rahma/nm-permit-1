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

    <title>Absensi | Administrasi</title>

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
                            <li><a class="dropdown-item" href="../cuti/">Pengajuan CUTI</a></li>
                            <li><a class="dropdown-item" href="../absensi/">Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../imp/">Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../dispensasi/">Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../dinasluar/">Izin Dinas Luar</a></li>
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
                            <li><a class="dropdown-item" href="../../persetujuan/masukpabrik/">Menyetujui Izin Masuk Pabrik</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/cuti/">Menyetujui CUTI</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/absensi/">Menyetujui Keterangan Absensi</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/imp/">Menyetujui Izin Meninggalkan Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/dispensasi/">Menyetujui Dispensasi</a></li>
                            <li><a class="dropdown-item" href="../../persetujuan/dinasluar/">Menyetujui Izin Dinas Luar</a></li>
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
                            <li><a class="dropdown-item" href="../../fasilitas/kendaraan">Kendaraan Kantor</a></li>
                            <li><a class="dropdown-item" href="../../fasilitas/Seragam">Pakaian Kerja</a></li>
                        </ul>
                    </div>

                    <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-file"></i>
                        <span>SOP</span></a>
                </li>

                <hr class="sidebar-divider my-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">
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
                                <span aria-hidden="true">×</span>
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
                    <h3>K e t e r a n g a n &ensp; A b s e n s i</h3>
                    <div class="row ">
                        <div class="col-12 col-sm-4 card tumpul table-borderless p-3">
                            <div class="row">
                                <div class="col-4 ">NRP</div>
                                <div class="col-8 "> :&ensp; <?= $_SESSION['nrp']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4 ">NAMA</div>
                                <div class="col-8 "> :&ensp; <?= $_SESSION['nama']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4 ">SEKSI</div>
                                <div class="col-8 "> :&ensp; <?= $_SESSION['seksi']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4 ">DEPARTEMEN</div>
                                <div class="col-8 "> :&ensp; <?= $_SESSION['departemen']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4 ">DIVISI</div>
                                <div class="col-8 "> :&ensp; <?= $_SESSION['divisi']; ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL ABSENSI -->
                    <button type="button" class="btn bg-warning mt-3 mr-3 text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-backdrop="static" data-keyboard="false">
                        + Surat Keterangan Absensi
                    </button>
                    <form action="" method="POST">
                        <div class="modal fade" id="exampleModal" tabindex="-1" keyboard="false" backdrop="static">
                            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel ">Surat Keterangan Absensi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row ">
                                            <div class="col col-12 col-lg-6 ">
                                                <div class="row">
                                                    <div class="col col-4  ">NRP</div>
                                                    <div class="col col-8 ">: <?php echo $_SESSION['nrp']; ?></div>
                                                    <div class="col col-4  "></div>
                                                    <div class="col col-8 "></div>
                                                    <div class="col col-4  mt-3">Nama</div>
                                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['nama']; ?></div>
                                                    <div class="col col-4 "></div>
                                                    <div class="col col-8 "></div>
                                                    <div class="col col-4  mt-3">Seksi</div>
                                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['seksi']; ?></div>
                                                    <div class="col col-4 "></div>
                                                    <div class="col col-8 "></div>
                                                    <div class="col col-4  mt-3">Departement</div>
                                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['departemen']; ?></div>
                                                    <div class="col col-4 "></div>
                                                    <div class="col col-8 "></div>
                                                    <div class="col col-4  mt-3">Divisi</div>
                                                    <div class="col col-8  mt-3">: <?php echo $_SESSION['divisi']; ?></div>
                                                </div>

                                            </div>
                                            <div class="col col-12  col-lg-6 ">
                                                <div class="row">
                                                    <div class="col col-4  pt-2  mt-3 ">Tanggal</div>
                                                    <div class="col col-8  p-0 mt-3 "><input type="date" class="form-control" name="tanggal_absensi" required /></div>
                                                    <div class="col col-4  pt-2  mt-3 ">Shift</div>
                                                    <div class="col col-8  p-0 mt-3 ">
                                                        <select style="width:100%; height: 36px;" name="shift" required>
                                                            <option class="dropdown-item" name="shift" id="1" value="1">1 (Satu)</option>
                                                            <option class="dropdown-item" name="shift" id="2" value="2">2 (Dua)</option>
                                                            <option class="dropdown-item" name="shift" id="3" value="3">3 (Tiga)</option>
                                                        </select>
                                                    </div>

                                                    <div class="col col-4 col-lg-4  pt-2  mt-3 ">Keterangan</div>
                                                    <div class="col col-8 col-lg-4 p-0 mt-3 ">
                                                        <select style="width:100%; height: 35px;" name="keterangan" required>
                                                            <option class="dropdown-item" name="keterangan" id="datang_tidak_scan" value="datang_tidak_scan">Datang Tidak Scan</option>
                                                            <option class="dropdown-item" name="keterangan" id="pulang_tidak_scan" value="pulang_tidak_scan">Pulang Tidak Scan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col col-4 col-lg-1  pt-2  mt-3 ">Jam </div>
                                                    <div class="col col-8 col-lg-3   p-0 mt-3 "><input type="time" class="form-control" name="jam" required /></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        <button type="input" class="btn btn-success" name="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- MODAL ABSENSI -->
                    <div class="row mt-2">
                        <div class="col card-body tumpul bg-light-biru text-primary mb-1" style="background-color: #ffe699;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; K e t e r a n g a n &ensp; A b s e n s i &ensp; A n d a </span>
                        </div>
                        <div class="col-12 card tumpul table-borderless">
                            <table id="datatablesSimple" class="table table-hover table-responsive border" style="color:black">
                                <thead class="table-info ">
                                    <tr>
                                        <th>No</th>
                                        <th>ID </th>
                                        <th>Tanggal Request</th>
                                        <th>NRP</th>
                                        <th>Nama</th>
                                        <th>Seksi</th>
                                        <th>Departemen</th>
                                        <th>Divisi</th>
                                        <th>Shift</th>
                                        <th>Tanggal Absen</th>
                                        <th>Keterangan</th>
                                        <th>Jam</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM absensi WHERE nama = '$_SESSION[nama]' ORDER BY id DESC;";
                                    $getquery = mysqli_query($conn, $sql);

                                    while ($tampil = mysqli_fetch_array($getquery)) {
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
                                            $status = "<p style='color:blue'>Permintaan Koreksi Absen Sudah Disetujui</p>";
                                        } else if ($approval == 10) {
                                            $status = "<p style='color:red'> Permintaan Koreksi Absen Ditolak </p>";
                                        }

                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?= $tampil['id']; ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["date_req"])); ?></td>
                                            <td><?= $tampil['nrp']; ?></td>
                                            <td><?= $tampil['nama']; ?></td>
                                            <td><?= $tampil['seksi']; ?></td>
                                            <td><?= $tampil['departemen']; ?></td>
                                            <td><?= $tampil['divisi']; ?></td>
                                            <td><?= $tampil['shift']; ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_absensi"])); ?></td>
                                            <td><?= $tampil['keterangan']; ?></td>
                                            <td><?= $tampil['jam']; ?></td>
                                            <td><?= $status ?> </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
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

<?php

include "../../../../koneksi.php";

// 1.Kode uniq untuk absensi
$code = mysqli_query($conn, "SELECT max(id) AS maxID FROM absensi WHERE date_req >= CURRENT_DATE");
$data = mysqli_fetch_array($code);

$kode = substr($data['maxID'], 12);
$ed = 'ABS';
$date = date("dmY");

$kode++;

$kodeauto = $ed . $date . sprintf("%03s", $kode);

// 2.Masuk Ke SQL
$approval = "$_SESSION[role]" + 1;

if (isset($_POST['submit'])) {
    $submit = htmlspecialchars($_POST['submit']);
    $tanggal = htmlspecialchars($_POST['tanggal_absensi']);
    $shift  = htmlspecialchars($_POST['shift']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    $jam = htmlspecialchars($_POST['jam']);

    if ($_SESSION['role'] == 2) {
        $sql = mysqli_query($conn, "INSERT INTO absensi VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$tanggal','$shift','$keterangan','$jam',5)");
        echo "<script>alert('Permintaan Anda Berhasil Dibuat');
        document.location.href='../absensi/';</script>";
    } else if ($_SESSION['role'] == 3) {
        $sql = mysqli_query($conn, "INSERT INTO absensi VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$tanggal','$shift','$keterangan','$jam',5)");
        echo "<script>alert('Permintaan Anda Berhasil Dibuat');
        document.location.href='../absensi/';</script>";
    } else if ($_SESSION['role'] == 4) {
        $sql = mysqli_query($conn, "INSERT INTO absensi VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$tanggal','$shift','$keterangan','$jam',5)");
        echo "<script>alert('Permintaan Anda Berhasil Dibuat');
        document.location.href='../absensi/';</script>";
    } else if ($_SESSION['role'] == 5) {
        $sql = mysqli_query($conn, "INSERT INTO absensi VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$tanggal','$shift','$keterangan','$jam',5)");
        echo "<script>alert('Permintaan Anda Berhasil Dibuat');
        document.location.href='../absensi/';</script>";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO absensi VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$tanggal','$shift','$keterangan','$jam','$approval')");
        echo "<script>alert('Permintaan Anda Berhasil Dibuat');
            document.location.href='../absensi/';</script>";
    }
}

?>

</html>