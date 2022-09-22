<?php
require_once ("controllergabungan.php");
if (isset($_POST['submitgabungan'])) {
    insertgabungan();
}

if (isset($_GET['deletegabungan'])) {
    deletegabungan($_GET['deletegabungan']);
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

<!--navbar-->
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
<h1 class="text-center">Office - Employees</h1>
<table class="table table-dark mt-2 w-50 mx-auto">
    <thead>
    <tr>
        <th scope="col">Employee</th>
        <th scope="col">Office</th>
        <th scope="col">Office</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach (indexgabungan() as $index => $gabungan) {
        echo "
                <tr>
                <td>".index()[$gabungan->karyawan]->nama."</td>
                <td>".indexemployee()[$gabungan->office]->name."</td>
                
                <td><a href='viewgabungan.php?deletegabungan=".$index."'><button class='btn btn-primary'>Delete</button></a></td>
                </tr>
                ";
    }
    ?>
    </tbody>
</table>
<div class="card shadow  w-50 mx-auto">
    <div class="container m-5 mx-auto">
<form method="POST" action="viewgabungan.php">
    <div class="text-center">
        <div class="form-group text-start w-50 d-inline-block">
            <label class="fw-bold p-2">Nama</label>
            <select id="nama" name="nama" class="form-select">
                <option value="">Pilih Nama karyawan</option>
                <?php foreach (index() as $indexkaryawan => $karyawan) : ?>
                    <option value="<?= $indexkaryawan ?>" name='nama'><?= $karyawan->nama ?></option>"
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group text-start w-50 d-inline-block">
            <label class="fw-bold p-2">Nama Office</label>
            <select id="name" name="name" class="form-select">
                <option value="">Pilih Nama Office</option>
                <?php foreach (indexemployee() as $indexemployee => $employee) : ?>
                    <option value="<?= $indexemployee ?>" name='name'><?= $employee->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <button name="submitgabungan" type="submit" class="btn d-block mx-auto mt-2 btn-dark">Submit</button>
</form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


