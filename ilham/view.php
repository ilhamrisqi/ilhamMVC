<?php
require_once("controller.php");
if(isset($_POST['create'])){
    insert();
}

if(isset($_GET['delete'])){
    delete($_GET['delete']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LatihanMVC</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid ">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="view.php">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewoffice.php">Office</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewgabungan.php">Employees Office</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<table class="table">
    <table class="table table-success table-striped mt-2 mx-auto w-50">
    <h1 class="text-center">Daftar Karyawan</h1>
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Usia</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
        <tbody>
        <?php
        foreach(index() as $index=>$user){
            echo"
        <tr>
        <td>".($index+1)."</td>
        <td>".$user->nama."</td>
        <td>".$user->jabatan."</td>
        <td>".$user->usia."</td>
        <td><a href='view.php?delete=".$index."'><button class='btn btn-primary'>Delete</button></a></td>
        </tr>
        ";
        }
        ?>
        </tbody>
    </table>
</table>
<div class="card shadow m-5 w-50 mx-auto">
<div class="container m-5 mx-auto">
    <h1 class="text-center ">Create Karyawan</h1>
    <form class="row g-3 mx-5" action="view.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="col-md-12">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan">
        </div>
        <div class="col-md-12">
            <label for="Usia" class="form-label">Usia</label>
            <input type="text" name="usia" class="form-control" id="usia">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" name="create">Create</button>
        </div>
    </form>
</div>
</div>
</body>
</html>


