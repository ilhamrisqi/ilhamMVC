<?php
require_once("controlleroffice.php");
if(isset($_POST['submit'])){
    insertemployee();
}

if(isset($_GET['deleteemployee'])){
    deleteemployee($_GET['deleteemployee']);
}
// if(isset($_GET['insertemployee'])){
//     insertemployee();
// }
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
<table class="table">
    <table class="table table-success table-striped mt-2 mx-auto w-50">
        <h1 class="text-center">Daftar Office</h1>
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Office</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Phone</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach(indexemployee() as $index=>$user){
            echo"
        <tr>
        <td>".($index+1)."</td>
        <td>".$user->name."</td>
        <td>".$user->alamat."</td>
        <td>".$user->kota."</td>
        <td>".$user->phone."</td>
        <td><a href='viewoffice.php?deleteemployee=".$index."'><button class='btn btn-primary'>Delete</button></a></td>
        </tr>
        ";
        }
        ?>
        </tbody>
    </table>
</table>

<br><br>
<div class="card shadow w-50 mx-auto">
    <div class="container m-5 mx-auto">
        <h1 class="text-center ">Create Office</h1>
        <form class="row g-3 mx-5" action="viewoffice.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="name" class="form-label">Name Office</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="col-md-12">
                <label for="office" class="form-label">Address</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="col-md-12">
                <label for="office" class="form-label">City</label>
                <input type="text" name="kota" class="form-control" id="kota">
            </div>
            <div class="col-md-12">
                <label for="office" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary" name="submit">Create</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>