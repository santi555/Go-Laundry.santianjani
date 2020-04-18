<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM UBAH OUTLET</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.container{
    width: 70%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    padding: 1cm;
    position: center;
    font-family: 'Quicksand', sans-serif;
}
</style>
<?php 
        require 'db.php';
        $id =$_GET['id'];
        $tampil = new Database();
        $outlet = $tampil->getById('outlet', ['id_outlet' => $id]);
        foreach($outlet as $out):
        ?>
<div class="container">
<form action="proses_ubah_outlet.php" method="POST">
    <h2 class="text-center"> FORM UBAH OUTLET </h2>
    <div class="form-group">
    <label> Id Outlet </label>
    <input type="text" class="form-control" name="id" Value="<?= $out['id_outlet'] ?>" readonly>
    <br> <br>
    <label> Nama Outlet </label>
    <input type="text" name="nama" class="form-control" Placeholder="Nama Outlet" Value="<?= $out['nama'] ?>">
    <br> <br>
    <label> Alamat </label>
    <input type="text" name="alamat" class="form-control" Placeholder="Alamat" Value="<?= $out['alamat'] ?>">
    <br> <br>
    <label> Telepon </label>
    <input type="text" name="telepon" class="form-control" Placeholder="Telepon" Value="<?= $out['telepon'] ?>">
    <br> <br>
    <button type="Submit" class="btn btn-primary"> Ubah </button>
    </div>
</form>
</div>
        <?php endforeach; ?>
</body>
</html>