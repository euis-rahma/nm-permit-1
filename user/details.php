<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Permit | Selengkapnya</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <!-- Vanilla CSS -->
  <link rel="stylesheet" href="../asset/style/css/style.css" />
  <script src="https://kit.fontawesome.com/630a92c5e5.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../asset/img//logo-mini.png" />
</head>

<body>
  <header>
    <nav class="navbar bg-light">
      <div class="container">
        <a class="navbar-brand" href="../">
          <img src="../asset/img/logo.png" alt="logo" width="185" />
        </a>
        <form class="d-flex" role="search" method="get" action="details">
          <input class="form-control me-1" type="text" placeholder="Masukan ID Anda" name="cari" style="height: 35px; width: 400px" required />
          <button class=" btn btn-primary fa-solid fa-magnifying-glass p-10 ms-2" type="submit" value="Search" name="submit"></button>
          <a class=" btn btn-dark fa-solid fa-house-chimney ms-1 pt-2 text-center " href="../user/"></a>
        </form>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <br>

      <div class="table-responsive">


        <?php
        include '../koneksi.php';

        $search = "";
        if (isset($_GET['cari'])) {
          $button = $_GET['submit'];
          $search = mysqli_real_escape_string($conn, $_GET['cari']); // mencegah sql injection dari input
        }
        $no = 1;

        // connect to database

        // $sql = "SELECT * FROM permit WHERE asal_perusahaan LIKE ('%" . $search . "%')";
        $sql = "SELECT * FROM permit WHERE id='$search'";
        $run = mysqli_query($conn, $sql);
        $foundnum = mysqli_num_rows($run);


        if ($foundnum == 0) {
          echo "We were unable to find a product with a search term of '<b>$search</b>'.";
        } else {
          echo "<h4><strong>Terdapat $foundnum hasil pencarian untuk \"" . $search . "\" </strong></h4>"; ?>

          <table class="table">
            <thead>
              <tr class="text-center">
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Nama</th>
                <th scope="col">Barcode ID</th>
                <th scope="col">Asal instansi</th>
                <!-- <th scope="col">Email</th> -->
                <th scope="col">Keperluan</th>
                <th scope="col">Mulai</th>
                <th scope="col">Selesai</th>
                <th scope="col">Jam mulai</th>
                <th scope="col">Jam selesai</th>
                <th scope="col">User</th>
                <th scope="col">Seksi</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>

            <?php } ?>

            </thead>
            <tbody class="table-group-divider">
              <?php         // get num of results stored in database
              // $sql = "SELECT * FROM permit WHERE asal_perusahaan LIKE ('%" . $search . "%')";
              $sql = "SELECT * FROM permit WHERE id='$search'";
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
                  $status = 'Silahkan Masuk Ke Area Nusametal';
                } else if ($approval == 10) {
                  $status = 'Tidak Diizinkan Masuk Ke Area Nusametal';
                }
              ?>
                <tr>
                  <!-- <th scope="row"><?= $tampil['id']; ?></th> -->
                  <td><?= $tampil['nama']; ?></td>
                  <td><img src="qrcode-img/<?= $tampil['id'] ?>.png"></td>
                  <td><?= $tampil['asal_perusahaan']; ?></td>
                  <!-- <td><?= $tampil['email']; ?></td> -->
                  <td><?= $tampil['keperluan']; ?></td>
                  <td><?= $tampil['tanggal_in']; ?></td>
                  <td><?= $tampil['tanggal_out']; ?></td>
                  <td><?= $tampil['jam_in']; ?></td>
                  <td><?= $tampil['jam_out']; ?></td>
                  <td><?= $tampil['user']; ?></td>
                  <td><?= $tampil['seksi']; ?></td>
                  <td><?= $status ?> </td>
                  <!--<td>-->
                  <!--  <a class="badge text-bg-danger p-2 ps-4 pe-4" href='details?id=<?php echo $tampil['id'] ?>&cari=<?php echo $_GET['cari'] ?>&submit=Search'> delete </a>-->
                  <!--  <a class="badge text-bg-primary mt-3 p-2" href='details?kode=<?php echo $tampil['id'] ?>'> Download </a>-->
                  <!--</td>-->

                <?php
                $no++;
              }
                ?>
                </tr>

                <!-- delete -->
                <?php
                include "../koneksi.php";

                if (isset($_GET['id'])) {
                  $id = mysqli_real_escape_string($conn, $_GET['id']);
                  $data = mysqli_query($conn, "SELECT * FROM permit WHERE id='$id' ");
                  $fetch = mysqli_fetch_array($data);
                  if (file_exists('qrcode-img/' . $fetch['id'] . '.png')) {
                    unlink('qrcode-img/' . $fetch['id'] . '.png');
                  }
                  mysqli_query($conn, "DELETE FROM permit  WHERE id='$_GET[id]'");

                  echo '<script> window.location.href="details?cari=' . $_GET['cari'] . '&submit=Search"; </script>';
                }
                ?>


            </tbody>
          </table>
      </div>
    </div>
    <footer class="m-2 justify-content-center align-items-center my-auto" style="height: 5vh">
      <div class="container-fluid my-auto">
        <div class="col-12 p-4 text-center">
          <p>&copy; 2022 PT Astra Otoparts Tbk, divisi Nusametal. Seluruh hak cipta dilindungi oleh undang-undang</p>
        </div>
      </div>
    </footer>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>