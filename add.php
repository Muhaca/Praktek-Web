<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/assets/css/bootstrap.min.css" >
  </head>
  <body>
  <div class="container">
        <h1>Input Data Mahasiswa</h1>
<form>
  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nim</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Nim" name="tnim">
  </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Nama" name="tnama">
  </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Email" name="temail">
  </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Telp/Hp</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Telp/Hp" name="ttelp">
  </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-9">
    <textarea class="form-control" placeholder="" name="talamat"></textarea>
  </div>
  </div>

<div class="form-group row">
    <label class="col-sm-3 col-form-label"></label>
    <div class="col-sm-9">
    <input type="submit" class="btn btn-primary" value="Save">
  </div>
  </div>
</form>
