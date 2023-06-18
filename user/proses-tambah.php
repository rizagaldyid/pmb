<?php

        include '../koneksi/koneksi.php';
        error_reporting(1);

    

        echo $id = htmlspecialchars( $_POST['id']);
        $tgld = htmlspecialchars($_POST ['tgld']);
        $ta = htmlspecialchars($_POST ['ta']);
        $jurusan = htmlspecialchars($_POST ['jurusan']);
        $nama = htmlspecialchars($_POST ['nama']);
        $tmpl = htmlspecialchars($_POST ['tmpl']);
        $tgll = htmlspecialchars($_POST ['tgll']);
        $jk = htmlspecialchars($_POST ['jk']);
        $agama = htmlspecialchars($_POST ['agama']);
        $alamat = htmlspecialchars($_POST ['alamat']);

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $extAllow = ['jpg', 'png', 'jpeg'];
        $validExt = explode(".", $namaFile);
        $Extvalid = strtolower(end($validExt));
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek kondisi ukuran file
        if ($ukuranFile <=2000000){
            //cek kondisi validasi dari extension
            if(in_array($Extvalid,$extAllow)){
                echo 'Extension ada';
            }
        }else {
            echo "Salah";
        }
        
        $sql = "SELECT * FROM maba WHERE id ='$id'";
        $query = mysqli_query($koneksi,$sql);
        $baris = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        
        if ($row >0) {
            header ("Location: tambah-data.php?pesan=kode $baris[id] Sudah ada");
        }else {
            $sql_insert = "INSERT INTO maba VALUES ('$id', '$tgld', '$ta', '$jurusan','$nama','$tmpl','$tgll','$jk','$agama','$alamat');";
        $query_insert = mysqli_query($koneksi,$sql_insert);
        if($query_insert){

            echo "Data Berhasil Di Simpan";
            // header ( 'Location:tampil-data.php?pesan=tambah' );
           
        }else{
            echo "Data Gagal Disimpan";
            header('Location:form-tambah.php' );

        }  
        
        

   
    }
?> 