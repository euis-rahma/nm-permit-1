<?php
include "koneksi.php";

$code = mysqli_query($conn, "SELECT max(id) AS maxID FROM permit WHERE date_req >= CURRENT_DATE");
$data = mysqli_fetch_array($code);

$kode = substr($data['maxID'], 12);
$ed = 'PMRT';
$date = date("dmY");

$kode++;

$kodeauto = $ed . $date . sprintf("%03s", $kode);
