<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../../koneksi.php';

// menangkap data yang dikirim dari form login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
};

// menyeleksi data user dengan username dan password yang sesuai
$cekuser = mysqli_query($conn, "SELECT * FROM karyawan WHERE nrp='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$hitung = mysqli_num_rows($cekuser);

// cek apakah username dan password di temukan pada database
// berfungsi mengecek apakah username dan password ada pada database
if ($hitung > 0) {
    //kalau data ditemukan
    $ambildatarole = mysqli_fetch_array($cekuser);
    $role = $ambildatarole['posisi'];
    if ($role == 'STAFF') {
        $posisi = 0;
    } else if ($role == 'SEC-HEAD') {
        $posisi = 1;
    } else if ($role == 'DEPART-HEAD') {
        $posisi = 2;
    } else if ($role == 'DIV-HEAD') {
        $posisi = 3;
    } else if ($role == 'COO') {
        $posisi = 4;
    } else if ($role == 'ADMIN') {
        $posisi = 99;
    }
    $nama = $ambildatarole['nama'];
    $seksi = $ambildatarole['seksi'];
    $depart = $ambildatarole['departemen'];
    $div = $ambildatarole['divisi'];
    $emailkntr = $ambildatarole['email_kantor'];
    $nrp = $ambildatarole['nrp'];
    $tanggal_lahir = $ambildatarole['tanggal_lahir'];
    $masuk_perusahaan = $ambildatarole['Masuk_perushaan'];
    $jabatan = $ambildatarole['jabatan'];
    $email_pribadi = $ambildatarole['email_pribadi'];
    $cuti_tahunan = $ambildatarole['cuti_tahunan'];
    $cuti_besar = $ambildatarole['cuti_besar'];
    $uk_baju = $ambildatarole['uk_baju'];
    $uk_celana = $ambildatarole['uk_celana'];
    $uk_sepatu = $ambildatarole['uk_sepatu'];

    if ($role == 'STAFF') {
        //kalau dia admin
        $_SESSION['log'] = ['logged'];
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $posisi;
        $_SESSION['seksi'] = $seksi;
        $_SESSION['divisi'] = $div;
        $_SESSION['departemen'] = $depart;
        $_SESSION['email_kantor'] = $emailkntr;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email_pribadi'] = $email_pribadi;
        $_SESSION['cuti_tahunan'] = $cuti_tahunan;
        $_SESSION['cuti_besar'] = $cuti_besar;
        $_SESSION['uk_baju'] = $uk_baju;
        $_SESSION['uk_celana'] = $uk_celana;
        $_SESSION['uk_sepatu'] = $uk_sepatu;
        header("location:../dashboard/");
    } else if ($role == 'SEC-HEAD') {
        //kalau dia bukan admin
        $_SESSION['log'] = ['logged'];
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $posisi;
        $_SESSION['seksi'] = $seksi;
        $_SESSION['divisi'] = $div;
        $_SESSION['departemen'] = $depart;
        $_SESSION['email_kantor'] = $emailkntr;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email_pribadi'] = $email_pribadi;
        $_SESSION['cuti_tahunan'] = $cuti_tahunan;
        $_SESSION['cuti_besar'] = $cuti_besar;
        $_SESSION['uk_baju'] = $uk_baju;
        $_SESSION['uk_celana'] = $uk_celana;
        $_SESSION['uk_sepatu'] = $uk_sepatu;
        header("location:../dashboard/");
    } else if ($role == 'DEPART-HEAD') {
        //kalau dia bukan admin
        $_SESSION['log'] = ['logged'];
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $posisi;
        $_SESSION['seksi'] = $seksi;
        $_SESSION['divisi'] = $div;
        $_SESSION['departemen'] = $depart;
        $_SESSION['email_kantor'] = $emailkntr;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email_pribadi'] = $email_pribadi;
        $_SESSION['cuti_tahunan'] = $cuti_tahunan;
        $_SESSION['cuti_besar'] = $cuti_besar;
        $_SESSION['uk_baju'] = $uk_baju;
        $_SESSION['uk_celana'] = $uk_celana;
        $_SESSION['uk_sepatu'] = $uk_sepatu;
        header("location:../dashboard/");
    } else if ($role == 'ADMIN') {
        $_SESSION['log'] = ['logged'];
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $posisi;
        $_SESSION['seksi'] = $seksi;
        $_SESSION['divisi'] = $div;
        $_SESSION['departemen'] = $depart;
        $_SESSION['email_kantor'] = $emailkntr;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email_pribadi'] = $email_pribadi;
        $_SESSION['cuti_tahunan'] = $cuti_tahunan;
        $_SESSION['cuti_besar'] = $cuti_besar;
        $_SESSION['uk_baju'] = $uk_baju;
        $_SESSION['uk_celana'] = $uk_celana;
        $_SESSION['uk_sepatu'] = $uk_sepatu;
        header("location:../dashboard/");
    } else {
        //kalau dia bukan admin
        $_SESSION['log'] = ['logged'];
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = $posisi;
        $_SESSION['seksi'] = $seksi;
        $_SESSION['divisi'] = $div;
        $_SESSION['departemen'] = $depart;
        $_SESSION['email_kantor'] = $emailkntr;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['nrp'] = $nrp;
        $_SESSION['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['masuk_perusahaan'] = $masuk_perusahaan;
        $_SESSION['jabatan'] = $jabatan;
        $_SESSION['email_pribadi'] = $email_pribadi;
        $_SESSION['cuti_tahunan'] = $cuti_tahunan;
        $_SESSION['cuti_besar'] = $cuti_besar;
        $_SESSION['uk_baju'] = $uk_baju;
        $_SESSION['uk_celana'] = $uk_celana;
        $_SESSION['uk_sepatu'] = $uk_sepatu;
        header("location:../dashboard/");
    }
} else {
    header("location:../index.php?alert=gagal");
}
