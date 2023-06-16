<?php
include'../koneksi/koneksi.php';


$id = $_GET['id'];

$sql = "SELECT * FROM maba WHERE id_pendaftaran = '$id'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Data</title>
</head>
<body>
<h1 >Form Edit Data</h1>
        <form action="proses-edit.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Id Pendaftaran</td>
                <td>:</td>
                <td><input type="text" name="id" id="" value="<?= $baris['id_pendaftaran'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal pendaftran</td>
                <td>:</td>
                <td><input type="date" name="tgld" id="" value="<?= $baris['tgl_daftar']?>"></td>
            </tr>
            <tr>
                <td>Tahun ajaran</td>
                <td>:</td>
                <td><input type="text" name="ta" id="" value="<?= $baris['th_ajaran'] ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="" value="<?= $baris['jurusan']?>"></td>
            </tr>
            <tr>
                <td>Nama Peserta</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?= $baris['nm_peserta']?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmpl" id="" value="<?= $baris['tmp_lahir']?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgll" id="" value="<?= $baris['tgl_lahir']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jk" id="" value="<?= $baris['jk'] ?>"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><input type="text" name="agama" id="" value="<?= $baris['Agama']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="" value="<?= $baris['Alamat']?>"></td>
            </tr>
        </table>
        <input type= "submit" id= "Simpan">


        </form>

    
</body>
</html>