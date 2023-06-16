<?php
include '../koneksi/koneksi.php';

if (isset($_GET['id'])) {
    header('location: tampil-data.php');
}


$id = $_POST['id'];
$tgld = $_POST['tgld'];
$ta = $_POST['ta'];
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];
$tmpl = $_POST['tmpl'];
$tgll = $_POST['tgll'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE maba SET tgl_daftar='$tgld', th_ajaran= '$ta', jurusan= '$jurusan', nm_peserta= '$nama', tmp_lahir= '$tmpl', tgl_lahir='$tgll', jk='$jk', Agama='$agama', Alamat='$alamat' WHERE id_pendaftaran='$id'";
$query = mysqli_query($koneksi,$sql);

if ($query){
    header ('location: tampil-data.php');
}else{
    echo "Data Gagal Diupdate";
}