<?php
  include "DB.php";

  $dbku=new DB();
  $koneksi=$dbku->open();
  $sql="select * from mahasiswa";
  $datasiswa=$dbku->recordset($sql,$koneksi);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/assets/css/bootstrap.min.css" >
  </head>
  <body>
    <div class="container">
      <h1>Data Mahasiswa</h1>
      <a class="btn btn-primary"
      	href="add.php?nim=<php <?php echo $rec ['nim'];?>"
      	roll="botton">Tambah Data
      </a>


  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Email</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($datasiswa as $rec) {?>
    <tr>
      <th scope="row"><?php echo $rec['nim'];?></th>
      <td><?php echo $rec['nama'];?></td>
      <td><?php echo $rec['email'];?></td>
      <td><?php echo $rec['telp'];?></td>
      <td><?php echo $rec['alamat'];?></td>
      <td>
      	<a class="btn btn-primary"
      	href="edit.php?nim=<php <?php echo $rec ['nim'];?>"
      	roll="botton">Edit
      	</a>
      	<a class="btn btn-danger"
      	href="delate.php?nim=<php <?php echo $rec ['nim'];?>"
      	roll="botton">Hapus
      </a>
      </td>
    </tr>
<?php }?>
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
