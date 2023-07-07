<?php
session_start();
include 'koneksi.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Kategori | TokBuk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  	<body>
		<!-- header -->
      	<header>
          <div class="container">
          <h1><a href="dashboard.php">TokBuk_ID</a></h1>
          <ul>
          	<li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="keluar.php">Keluar</a></li>
          </ul>
         </div>
       </header>

      <!-- content -->
      <div class="section">
        <div class="container">
          <h3>Tambah Data Kategori</h3>
          <div class="box">
			<form action="" method="POST">
            	<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
              <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
            	if(isset($_POST['submit'])){

                  $nama= ucwords( $_POST['nama']);

                  $insert= mysqli_query($conn,"INSERT INTO tb_category VALUES(
                                          null,
                                          '".$nama."') ");

                if($insert){
                  echo 'berhasil';
                }else{
                  echo 'gagal' .mysqli_error($conn);
                }

                }
            ?>
          </div>
          </div>
        </div>

	  <!-- footer -->
      <footer>
      	<div class="container">
        	<small>Copyright &copy; 2022 by NopiAri - TokBuk_ID</small>
        </div>
      </footer>
    </body>
  </html>