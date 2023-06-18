<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="../css/form-tambah.css">
</head>
<body>
        <!-- <?php
        echo $_GET['pesan'];
        ?> -->

  <div class="formbold-form-wrapper">
      
      <img class="gambar"src="../user/top.png">

      <div class="formbold-form-title">
        <h2 class="">Tambah Data</h2>
        <p>
          Tambahin data nya donk
        </p>  
      </div>
        <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
        <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label">
            Id kamu
          </label>
          <input
            type="text"
            name="id"
            id=""
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="lastname" class="formbold-form-label">Nama kamu </label>
          <input
            type="text"
            name="nama"
            id=""
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="email" class="formbold-form-label">Tanggal daftar </label>
          <input
            type="date"
            name="tgld"
            id=""
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="phone" class="formbold-form-label">Tanggal lahir</label>
          <input
            type="date"
            name="tgll"
            id="phone"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">
          Jurusan
        </label>
        <input
          type="text"
          name="jurusan"
          id=""
          class="formbold-form-input"
          
        />
      </div>

      <div class="formbold-mb-3">
        <label for="address2" class="formbold-form-label">
          Alamat
        </label>
        <input
          type="text"
          name="alamat"
          id=""
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="state" class="formbold-form-label"> Tahun ajaran</label>
          <input
            type="text"
            name="ta"
            id=""
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="country" class="formbold-form-label"> Jenis Kelamin </label>
          <input
            type="text"
            name="jk"
            id=""
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
          <label for="post" class="formbold-form-label"> Agama</label>
          <input
            type="text"
            name="agama"
            id="post"
            class="formbold-form-input"
          />
        </div>
        <div>
          <label for="area" class="formbold-form-label">Tempat lahir </label>
          <input
            type="text"
            name="tmpl"
            id="area"
            class="formbold-form-input"
          />
        </div>
      </div>
      
      <button type="submit" class="formbold-btn">Simpan</button>
      
    
        </form>
</body>
</html>