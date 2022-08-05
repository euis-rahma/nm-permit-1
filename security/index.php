<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Permit | Security</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <!-- Vanilla CSS -->
    <link rel="stylesheet" href="../asset/style/css/style.css" />
    <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
    <script src="../style/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../asset/img/logo-mini.png" />
</head>

<body>
    <section class="formSecurity d-flex ">
        <div class="secureLeft w-50 float-start">
            <div class="row mt-5 justify-content-center align-items-center h-100">
                <div class="col-6" style="margin-bottom: 10rem;">
                    <div class="header ">
                        <h1>Form Security</h1>
                        <p>Perhatikan kembali Data Anda</p>
                    </div>

                    <?php
                    include '../koneksi.php';

                    $search = "";
                    if (isset($_GET['barcode'])) {
                        $button = $_GET['submit'];
                        $search = $_GET['barcode'];
                    }

                    $sql = "SELECT * FROM permit WHERE id = ('" . $search . "')";
                    $run = mysqli_query($conn, $sql);
                    $foundnum = mysqli_num_rows($run);

                    if ($foundnum == 0) {
                        // echo "We were unable to find a product with a search term of '<b>$search</b>'.";
                    ?>
                        <div class="row">
                            <div class="col-md">
                                <label for="txtAsal" class="form-label fw-bold fs-6 ">Status Approval</label>
                                <input disabled class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="txtNama" class="form-label mt-3">Nama</label>
                                <textarea class="form-control" style="width:400px; height:100px;" disabled></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="txtTujuan" class="form-label">Keperluan</label>
                                <textarea class="form-control" style="width:400px; height:100px;" disabled></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <label for="txtAsal" class="form-label">Asal instansi</label>
                                <input class="form-control" style="width:400px; height:50px;" disabled />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="txtTglPlan" class="form-label">Tanggal Rencana Mulai (Y-M-D)</label>
                                <input disabled class="form-control" />
                            </div>

                            <div class="col px-0">
                                <label for="txtJamMasuk" class="form-label">Tanggal Rencana Selesai (Y-M-D)</label>
                                <input disabled class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="txtTglPlan" class="form-label">Jam Rencana Masuk</label>
                                <input disabled class="form-control" />
                            </div>

                            <div class="col ">
                                <label for="txtJamMasuk" class="form-label ">Jam Rencana Keluar</label>
                                <input disabled class="form-control " />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <label for="txtAsal" class="form-label">User</label>
                                <input disabled class="form-control" />
                            </div>
                        </div>

                </div>
            </div>
        </div>
    <?php
                    } else {
                        // echo "<h4><strong>Terdapat $foundnum hasil pencarian untuk \"" . $search . "\" </strong></h4>";
                    }
    ?>
    <?php         // get num of results stored in database

    $sql = "SELECT * FROM permit WHERE id = ('" . $search . "')";
    $getquery = mysqli_query($conn, $sql);

    while ($tampil = mysqli_fetch_array($getquery)) {
        $approval = $tampil['approval'];
        if ($approval == 0) {
            $status = 'menunggu Approval Staff';
        } else if ($approval == 1) {
            $status = 'menunggu Approval Kasie';
        } else if ($approval == 2) {
            $status = 'menunggu Approval DeptHead';
        } else if ($approval == 3) {
            $status = 'menunggu Approval DivHead';
        } else if ($approval == 4) {
            $status = 'menunggu Approval COO';
        } else if ($approval == 5) {
            $status = 'Silahkan Masuk Ke Area Nusametal';
        } else if ($approval == 10) {
            $status = 'Tidak Diizinkan Masuk Ke Area Nusametal';
        }
    ?>
        <div class="row">
            <div class="col-md">
                <label for="txtAsal" class="form-label fw-bold fs-6">Status Approval</label>
                <input class="form-control" style="width:400px; height:50px;" disabled placeholder="<?= $status; ?> " />
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <label for="txtNama" class="form-label">Nama</label>
                <textarea class="form-control" style="width:400px; height:100px;" disabled placeholder="<?= $tampil['nama']; ?> "></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <label for="txtTujuan" class="form-label">Keperluan</label>
                <textarea class="form-control" style="width:400px; height:100px;" disabled placeholder="<?= $tampil['keperluan']; ?> "></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <label for="txtAsal" class="form-label">Asal instansi</label>
                <input class="form-control" style="width:400px; height:50px;" disabled placeholder="<?= $tampil['asal_perusahaan']; ?> " />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="txtTglPlan" class="form-label">Tanggal Rencana Mulai (Y-M-D)</label>
                <input disabled class="form-control" placeholder="<?= $tampil['tanggal_in']; ?>" />
            </div>

            <div class="col px-0">
                <label for="txtJamMasuk" class="form-label">Tanggal Rencana Selesai (Y-M-D)</label>
                <input disabled class="form-control" placeholder="<?= $tampil['tanggal_out']; ?>" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="txtTglPlan" class="form-label">Jam Rencana Masuk</label>
                <input disabled class="form-control" placeholder="<?= $tampil['jam_in']; ?> WIB" />
            </div>

            <div class="col">
                <label for="txtJamMasuk" class="form-label">Jam Rencana Keluar</label>
                <input disabled class="form-control" placeholder="<?= $tampil['jam_out']; ?> WIB" />
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <label for="txtAsal" class="form-label">User</label>
                <input class="form-control" style="width:400px; height:50px;" disabled placeholder="<?= $tampil['user']; ?> " />
            </div>
        </div>


        </div>
        </div>
        </div>
    <?php
    }
    ?>

    <div class="secureRight h-100 w-50 mt-5">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-6 " style="margin-bottom: 10rem;">
                <div class="row">
                    <div class="col barcodeLay">
                        <form action="index" method="GET">
                            <input class="form-control me-1" type="name" name="barcode" placeholder="Scan Here..." autofocus required style="height:70px;">
                            <button class=" btn btn-primary fa-solid fa-magnifying-glass p-10 ms-2 mt-3" type="submit" value="Search" name="submit"></button>
                            <a class=" btn btn-primary fa-solid fa-arrows-rotate p-10 ms-2 mt-3" href="../security"></a>
                        </form>
                        <!-- <img class="img-fluid" src="img/barcodetest.png" alt="barcodeLay" style="border: 2cm; height: 100px" /> -->
                    </div>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col imageCam">
                        <img class="img" src="../asset/img/logo.png" alt="" style="width: 50vh" />
                    </div>
                </div>

                <div class="row mt-4 mb-3 d-flex">
                    <div class="col iniJam">
                        <div id="clock" class="d-fixed fw-bold fs-4">
                            <script>

                            </script>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <form action="" method="POST">
                        <div class="col">
                            <button type="submit" name="check-in" class="btn btn-primary">Check-in</button>
                            <button type="submit" name="check-out" class="btn btn-danger">Check-out</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>


    <?php

    include "../koneksi.php";

    if (isset($_GET['barcode']) && isset($_POST['check-in'])) {
        $button = $_POST['check-in'];
        $search = $_GET['barcode'];
        mysqli_query($conn, "UPDATE permit set check_in=(NOW()) WHERE id='$search'");

        echo "<script>alert('Sudah Berhasil Check-In');
        document.location.href='../security';</script>";
    }

    ?>
    <?php

    include "../koneksi.php";

    if (isset($_GET['barcode']) && isset($_POST['check-out'])) {
        $button = $_POST['check-out'];
        $search = $_GET['barcode'];
        mysqli_query($conn, "UPDATE permit set check_out=(NOW()) WHERE id='$search'");

        echo "<script>alert('Sudah Berhasil Check-out');
    document.location.href='../security';</script>";
    }

    ?>

    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../asset/style/js/main.js"></script>
</body>


</html>