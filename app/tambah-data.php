<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- <?php
        echo $_GET['pesan'];
        ?> -->

        <h1 align = center >Form Tambah Data</h1>
        <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
        <table align = center>
            <tr>
                <td>Id Pendaftaran</td>
                <td>:</td>
                <td><input type="text" name="id" id=""></td>
            </tr>
            <tr>
                <td>Tanggal pendaftran</td>
                <td>:</td>
                <td><input type="date" name="tgld" id=""></td>
            </tr>
            <tr>
                <td>Tahun ajaran</td>
                <td>:</td>
                <td><input type="text" name="ta" id=""></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id=""></td>
            </tr>
            <tr>
                <td>Nama Peserta</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmpl" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgll" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jk" id=""></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><input type="text" name="agama" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
        </table>
        <input type= "submit" id= "">


        </form>
</body>
</html>