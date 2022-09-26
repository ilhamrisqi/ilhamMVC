<?php
include_once("model.php");

if(session_status()===PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['listUser'])){
    $_SESSION['listUser'] = array();
}


function insert(){
    $user = new user();
    $user->nama = $_POST['nama'];
    $user->jabatan = $_POST['jabatan'];
    $user->usia = $_POST['usia'];
    array_push($_SESSION['listUser'],$user);
}

function index(){
    return $_SESSION['listUser'];
}

function delete($id){
    unset($_SESSION['listUser'][$id]);
}


function editkaryawan($id){
    $user = new user();
    $user->nama = $_POST['nama'];
    $user->jabatan = $_POST['jabatan'];
    $user->usia = $_POST['usia'];
    $_SESSION['listUser'][$id]= $user;
}

?>