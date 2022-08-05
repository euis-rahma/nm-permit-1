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

    <title>Cuti | Administrasi</title>

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
                    <h3>C U T I</h3>
                    <div class="row ">
                        <div class="col-12 col-sm-4 card tumpul table-borderless p-3 ">
                            <table>
                                <?php
                                include "../../../../koneksi.php";


                                $cuti_besar = mysqli_query($conn, "SELECT IFNULL(a.cuti_besar-SUM(b.jumlah_cuti),( SELECT cuti_besar FROM karyawan WHERE nrp='$_SESSION[nrp]' )) FROM karyawan a INNER JOIN cuti b ON a.nrp=b.nrp WHERE b.nrp='$_SESSION[nrp]' AND b.jenis_cuti='Cuti Besar';");

                                $cuti_tahunan = mysqli_query($conn, "SELECT IFNULL(a.cuti_tahunan-SUM(b.jumlah_cuti),( SELECT cuti_tahunan FROM karyawan WHERE nrp='$_SESSION[nrp]' )) FROM karyawan a INNER JOIN cuti b ON a.nrp=b.nrp WHERE b.nrp='$_SESSION[nrp]' AND b.jenis_cuti='Cuti Tahunan';");

                                $tampil_cuti_besar = mysqli_fetch_array($cuti_besar);
                                $tampil_cuti_tahunan = mysqli_fetch_array($cuti_tahunan);
                                $tampil_cuti_tahunan[0];
                                $tampil_cuti_besar[0];




                                ?>
                                <tr>
                                    <th width="100px">Cuti tahunan </th>
                                    <td> &ensp; : <?php echo $tampil_cuti_tahunan[0]; ?> Hari</td>

                                </tr>
                                <tr>
                                    <th width="100px">Cuti Besar </th>
                                    <td> &ensp; : <?php echo $tampil_cuti_besar[0]; ?> Hari</td>
                                </tr>


                            </table>

                        </div>
                        <div class="col-0 col-sm-8 "></div>
                    </div>
                    <div class="row ">
                        <div class="col-12 col-sm-8">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-warning mt-3 mr-3 text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-backdrop="static" data-keyboard="false">
                                + Permohonan Baru
                            </button>
                            <button type="button" class="btn bg-secondary mt-3 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-backdrop="static" data-keyboard="false">
                                Jenis Cuti Nusametal
                            </button>
                        </div>
                        <div class="col-0 col-sm-8 "></div>
                        <!-- Modal -->
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal fade" id="exampleModal" tabindex="-1" keyboard="false" backdrop="static">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel ">Form Cuti</h5>
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
                                                    </div>

                                                </div>
                                                <div class="col col-12  col-lg-6 ">
                                                    <div class="row">
                                                        <div class="col col-4  pt-2 mx-0 mt-3">Tanggal</div>
                                                        <div class="col col-8  p-0 mt-3"><input type="date" class="form-control" name="tanggal_mulai" required /></div>
                                                        <div class="col col-4  pt-2 mx-0">S/d</div>
                                                        <div class="col col-8  p-0"><input type="date" class="form-control" name="tanggal_selesai" required /></div>

                                                        <div class="col col-4  pt-2 mx-0">Jumlah Hari</div>
                                                        <div class="col col-2  p-0"> <input type="number" min="1" max="50" class="form-control" name="jumlah_cuti" required /></div>

                                                        <!-- <div class="col col-2  mx-0"></div> -->
                                                        <div class="col col-6  p-0">
                                                            <select style="width:180px ; height: 36px;" name="jenis_cuti">
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Tahunan" value="Cuti Tahunan" selected>-- Pilih Jenis Cuti --</option>
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Tahunan" value="Cuti Tahunan">Cuti Tahunan</option>
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Besar" value="Cuti Besar">Cuti Besar</option>
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Melahirkan" value="Cuti Melahirkan">Cuti Melahirkan</option>
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Haid" value="Cuti Haid">Cuti Haid</option>
                                                                <option class="dropdown-item" name="jenis_cuti" id="Cuti Pasal 72 PKB" value="Cuti Pasal 72 PKB">Cuti Pasal 72 PKB</option>
                                                            </select>
                                                        </div>

                                                        <div class="col col-4  pt-3 mx-0">Keperluan</div>
                                                        <div class="col col-8 p-0"><textarea class="form-control" id="keperluan" name="keperluan" required></textarea></div>

                                                        <div class="col col-4  pt-1 mx-0">Lampiran</div>
                                                        <div class="col col-8 p-0 "> <input type="file" name="lampiran" id="lampiran"></div>
                                                        <label style="color:red; font-size:13px"> *untuk jenis cuti sesuai pasal 72 PKB, harus disertai lampiran.</label>

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

                            <!-- MODAL JENIS CUTI -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" keyboard="false" backdrop="static">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel ">Jenis Cuti</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">Jenis Cuti Nusametal</div>
                                                <div class="col-12">1. Cuti Tahunan</div>
                                                <div class="col-12">2. Cuti Besar (5th, 10th, 15th, 20th, 25th, dst. Kelipatan 5 Tahun)</div>
                                                <div class="col-12">3. Cuti Haid</div>
                                                <div class="col-12">4. Cuti Melahirkan</div>
                                                <div class="col-12">Jenis Izin Tidak Masuk Kerja Dengan Tetap Mendapatkan Gaji Sesuai PKB Pasal 72 </div>
                                            </div>
                                            <div class="row border mt-2">
                                                <div class="col-6 border text-center p-2">Kebutuhan</div>
                                                <div class="col-6 border text-center p-2">Izin Yang Diberikan</div>
                                                <div class="col-6 border">- Pernikahan Pekerja Yang Bersangkutan</div>
                                                <div class="col-6 border text-center">3 Hari</div>
                                                <div class="col-6 border">- Pernikahan Anak Pekerja</div>
                                                <div class="col-6 border text-center">2 Hari</div>
                                                <div class="col-6 border">- Pernikahan Saudara Sekandung Pekerja</div>
                                                <div class="col-6 border text-center">1 Hari</div>
                                                <div class="col-6 border">- Khitanan / Pembabtisan Anak Pekerja</div>
                                                <div class="col-6 border text-center">2 Hari</div>
                                                <div class="col-6 border">- Istri Pekerja Melahirkan</div>
                                                <div class="col-6 border text-center">2 Hari</div>
                                                <div class="col-6 border">- Istri / Suami / Anak Pekerja Wafat</div>
                                                <div class="col-6 border text-center">3 Hari</div>
                                                <div class="col-6 border">- Orang Tua / Mertua / Menantu Wafat</div>
                                                <div class="col-6 border text-center">3 Hari</div>
                                                <div class="col-6 border">- Saudara Kandung / Ipar Wafat</div>
                                                <div class="col-6 border text-center">2 Hari</div>
                                                <div class="col-6 border">- Istri / Suami / Anak Pekerja Diopname Di Rumah Sakit</div>
                                                <div class="col-6 border text-center">2 Hari</div>
                                                <div class="col-6 border">- Kakek / Nenek / Cucu / Orang Serumah Wafat</div>
                                                <div class="col-6 border text-center">1 Hari</div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">Khusus untuk kedukaan dan pekerja menikah, apabila hal tersebut terjadi diluar kota dengan radius 150KM maka tiap keperluan tersebut mendapat izin tambahan sebanyak-banyaknya 2 (dua) hari sedangkan bila terjadi diluar provinsi yang ada di pulau jawa, mendapatkan izin tambahan sebanyak-banyaknya 3 (tiga) hari dari item pada ayat 2 diatas, dengan pemberitahuan kepada atasannya.</div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL JENIS CUTI -->
                        </form>
                    </div>
                    <div class="row mt-2">
                        <div class="col card-body tumpul bg-light-biru text-primary" style="background-color: #bdd7ee;">
                            <i class="fas fa-fw fa-lightbulb"></i>
                            <span>B e r i k u t &ensp; A d a l a h &ensp; R i w a y a t &ensp; C u t i &ensp; A n d a </span>
                        </div>
                        <div class="col-12 card tumpul table-borderless mt-2">
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
                                        <th>Jumlah Cuti (Hari)</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Mulai</th>
                                        <th>tanggal Selesai</th>
                                        <th>Keperluan</th>
                                        <th>Lampiran</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    <?php
                                    include "../../../../koneksi.php";
                                    $no = 1;
                                    $sql = "SELECT * FROM cuti WHERE nama = '$_SESSION[nama]' ORDER BY id DESC;";
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
                                            $status = "<p style='color:blue'> Cuti Anda Sudah Disetujui </p>";
                                        } else if ($approval == 10) {
                                            $status = "<p style='color:red'> Cuti Anda Ditolak </p>";
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
                                            <td><?= $tampil['jumlah_cuti']; ?></td>
                                            <td><?= $tampil['jenis_cuti']; ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_mulai"])); ?></td>
                                            <td><?php echo date('d F Y', strtotime($tampil["tanggal_selesai"])); ?></td>
                                            <td><?= $tampil['keperluan']; ?></td>
                                            <td><img src="../lampiran/<?= $tampil['lampiran']; ?>" style="max-width:100px; max-height:100px"></td>
                                            <td><?= $status ?> </td>


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

</html>

<?php
include "../../../../koneksi.php";

// 1.Kode uniq untuk cuti
$code = mysqli_query($conn, "SELECT max(id) AS maxID FROM cuti WHERE date_req >= CURRENT_DATE");
$data = mysqli_fetch_array($code);

$kode = substr($data['maxID'], 12);
$ed = 'CUTI';
$date = date("dmY");

$kode++;

$kodeauto = $ed . $date . sprintf("%03s", $kode);

// 2. sintakmasuk ke sql
$cuti1 = "Cuti Tahunan";
$cuti2 = "Cuti Besar";
$cuti3 = "Cuti Melahirkan";
$cuti4 = "Cuti Haid";
$cuti5 = "Cuti Pasal 72 PKB";

$siscut1 = $tampil_cuti_tahunan[0];
$siscut2 = $tampil_cuti_besar[0];
$approval = "$_SESSION[role]" + 1;

function sendMessage()
{
    $content = array(
        "en" => 'Test Request Cuti Baru'
    );

    $filter = array(
        "field" => "tag",
        "key" => "role",
        "relation" => "=",
        "value" => $_SESSION['role']
    );

    $fields = array(
        'app_id' => '91e90f0f-7547-47aa-9f8e-7809c28e3d7d',
        'filters' => $filter,
        'included_segments' => array('Subscribed Users'),
        'contents' => $content,
    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic OWJhZGZkNjEtZDc2OS00ZGNkLTk5ZGUtNTdiNzk4YWEyM2Nj'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

if (isset($_POST['submit'])) {
    $submit = $_POST['submit'];
    $tanggal_mulai = htmlspecialchars($_POST['tanggal_mulai']);
    $tanggal_selesai = htmlspecialchars($_POST['tanggal_selesai']);
    $jmlh_cuti = htmlspecialchars($_POST['jumlah_cuti']);
    $jenis_cuti = htmlspecialchars($_POST['jenis_cuti']);
    $keperluan = htmlspecialchars($_POST['keperluan']);
    $direktori = "../lampiran/";  //letak folder lampiran nanti
    // $lampiran = htmlspecialchars($_FILES['lampiran']['name']); //name ini nama filenya
    $lampiran_name = $kodeauto . $_FILES['lampiran']['name'];

    if ($_POST['jenis_cuti'] == $cuti2 && $_POST['jumlah_cuti'] > $siscut2) {
        echo "<script>alert('Jatah Cuti Anda tidak Sesuai..!!');
        document.location.href='../cuti/';</script>";
    } else if ($_POST['jenis_cuti'] == $cuti1 && $_POST['jumlah_cuti'] > $siscut1) {
        echo "<script>alert('Jatah Cuti Anda tidak Sesuai..!!');
        document.location.href='../cuti/';</script>";
    } else if ($_POST['jenis_cuti'] == $cuti3) {
        $sql = mysqli_query($conn, "INSERT INTO cuti VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jmlh_cuti','$jenis_cuti','$tanggal_mulai','$tanggal_selesai','$keperluan','na.png','$approval','none')");
        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode($return);
        echo "<script>alert('Request Anda Sudah Dibuat..!!');
        document.location.href='../cuti/';</script>";
    } else if ($_POST['jenis_cuti'] == $cuti4) {
        $sql = mysqli_query($conn, "INSERT INTO cuti VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jmlh_cuti','$jenis_cuti','$tanggal_mulai','$tanggal_selesai','$keperluan','na.png','$approval','none')");
        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode($return);
        echo "<script>alert('Request Anda Sudah Dibuat..!!');
        document.location.href='../cuti/';</script>";
    } else if ($_POST['jenis_cuti'] == $cuti5) {
        move_uploaded_file($_FILES['lampiran']['tmp_name'], $direktori . $lampiran_name); //tmp_name itu fisik filenya
        $sql = mysqli_query($conn, "INSERT INTO cuti VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jmlh_cuti','$jenis_cuti','$tanggal_mulai','$tanggal_selesai','$keperluan','$lampiran_name','$approval','none')");
        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode($return);
        echo "<script>alert('Form request Sudah Dibuat, Silahkan Cek.');
        document.location.href='../cuti/';</script>";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO cuti VALUES ('$kodeauto',(NOW()),'$_SESSION[nrp]','$_SESSION[nama]','$_SESSION[role]','$_SESSION[seksi]','$_SESSION[departemen]','$_SESSION[divisi]','$jmlh_cuti','$jenis_cuti','$tanggal_mulai','$tanggal_selesai','$keperluan','na.png','$approval','none')");
        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode($return);
        echo "<script>alert('Request Anda Sudah Dibuat..!!');
        document.location.href='../cuti/';</script>";
    }
}
?>