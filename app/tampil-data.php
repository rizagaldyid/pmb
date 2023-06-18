<?php
session_start();
if ($_SESSION['status'] != 'login'){
    header('Location:tampil-data.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    
    <h1 class="judul" align = center>Data Calon Mahasiswa</h1>
    <?php
   

    include '../koneksi/koneksi.php';

    //syntax untuk menampilkan data
    
    if (isset($_POST['cari'])){
        $keyword = $_POST['keyword'];
        $sql= "SELECT * FROM maba WHERE id_pendaftaran = '$keyword' OR nm_peserta like '%$keyword%'";
    }else{
        $sql = "SELECT * FROM maba";
    }
   
    $query = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_all($query, MYSQLI_BOTH);

    if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if ($pesan == 'tambah') {
            echo "Data berhasi di tambah";
        }
    }
 
    // echo $pesan
    ?>

    <form align = center action="" method="post">
        <label for="cari">cari</label>
        <input type="text" name="keyword" id="cari" autofocus autocomplete="off">
        <button type="submit" name="cari">cari</button>
    </form>
    <table align= center class="table">
        <tr>
            <td class="tablea"><a href="tambah-data.php"><button class="buttont">Tambah data</button></td></a>
            <br>
            <td class="table"><a href="logout.php"><button class="buttonl">Logout</button></td></a>  
        </tr>
    </table>

    
    <table class="table" align=center>
        <tr>
            <br>
            <!-- <th>No</th> -->
            <th>Id Pendaftaran</th>
            <th>Tanggal Daftar</th>
            <th>Tahun ajaran</th>
            <th>Jurusan</th>
            <th>Nama Peserta</th>
            <th>Tempat lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach( $row as $baris){?>
        <tr>
            
            <td><?=$baris['id_pendaftaran'] ?> </td>
            <td><?=$baris['tgl_daftar'] ?> </td>
            <td><?=$baris['th_ajaran'] ?> </td>
            <td><?=$baris['jurusan'] ?> </td>
            <td><?=$baris['nm_peserta'] ?> </td>
            <td><?=$baris['tmp_lahir'] ?> </td>
            <td><?=$baris['tgl_lahir'] ?> </td>
            <td><?=$baris['jk'] ?> </td>
            <td><?=$baris['Agama'] ?> </td>
            <td><?=$baris['Alamat'] ?> </td>
            <td>
                <a href="edit.php?id=<?= $baris['id_pendaftaran'] ?>"><button class="buttone">Edit</button></a>
                <a href="delete.php?id=<?=$baris['id_pendaftaran']?>" onclick="return confirm('Yakin ingin di hapus')"><button class="buttonl">Hapus</button></a>
            </td>
        </tr>

        <?php }?>
    </table>

            
</body>
</html>

