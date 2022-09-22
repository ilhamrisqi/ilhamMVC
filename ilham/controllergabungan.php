<?php
include_once("model.php");
include_once("modeloffice.php");
include_once("modelofficekaryawan.php");

if(session_status()===PHP_SESSION_NONE){
    session_start();
}
// session_start();
require_once("controller.php");
require_once("controlleroffice.php");

if(!isset($_SESSION['DataOfficeKaryawan'])){
    $_SESSION['DataOfficeKaryawan'] = array();
}


function insertgabungan(){
    $tes = new officekaryawan();
    $tes->karyawan = $_POST['nama'];
    $tes->office = $_POST['name'];
    array_push($_SESSION['DataOfficeKaryawan'],$tes);

}

function indexgabungan(){
    return $_SESSION['DataOfficeKaryawan'];
}

function deletegabungan($id){
    unset($_SESSION['DataOfficeKaryawan'][$id]);
}

?>