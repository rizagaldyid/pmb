<?php
include('../koneksi/koneksi.php');

$id = $_GET['id'];
$sql = "DELETE FROM maba where id_pendaftaran='$id'";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header('location: tampil-data.php');
}else {
    echo "Data gagal dihapus";
}