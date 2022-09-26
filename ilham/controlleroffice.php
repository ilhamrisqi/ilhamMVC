<?php
include_once("modeloffice.php");
// session_start();
if(session_status()===PHP_SESSION_NONE){
    session_start();
}
if(!isset($_SESSION['listUserEmployee'])){
    $_SESSION['listUserEmployee'] = array();
}


function insertemployee(){
    $user = new useremployee();
    $user->name = $_POST['name'];
    $user->alamat = $_POST['alamat'];
    $user->kota = $_POST['kota'];
    $user->phone = $_POST['phone'];
    array_push($_SESSION['listUserEmployee'],$user);
}

function indexemployee(){
    return $_SESSION['listUserEmployee'];
}

function deleteemployee($id){
    unset($_SESSION['listUserEmployee'][$id]);
}

function editOffice($id){
    $user = new useremployee();
    $user->name = $_POST['name'];
    $user->alamat = $_POST['alamat'];
    $user->kota = $_POST['kota'];
    $user->phone = $_POST['phone'];
    $_SESSION['listUserEmployee'][$id]= $user;
}

// function getEmployee($id){
//     return index()[$id];
// }
?>