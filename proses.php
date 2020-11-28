<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['name'],$_POST['phone_number'],$_POST['note'],$_POST['employee_id']);
 	header("location:list.php?id=".$_POST['employee_id']."&aksi=list");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:list.php?id=".$_GET['employee_id']."&aksi=list");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['name'],$_POST['phone_number'],$_POST['note'],$_POST['employee_id']);
 	header("location:list.php?id=".$_POST['employee_id']."&aksi=list");
 }elseif($aksi == "register"){
	$db->register($_POST['name'],$_POST['username'],$_POST['password']);
	header("location:login.php");
}elseif($aksi == "login"){
	$db->login($_POST['username'],$_POST['password']);
}elseif($aksi == "logout"){

session_start();
session_destroy();
header("location:index.php");
}elseif($aksi == "report"){
//	var_dump($_POST['customers_id']);die();
	$db->inputReport($_POST['note'],$_POST['customers_id'],$_POST['reason']);
	$db->updateStatus($_POST['customers_id']);
	header("location:report.php?id=".$_POST['employee_id']."&aksi=report");
}elseif($aksi == "hapusreport"){ 	
	$db->hapusReport($_GET['id']);
	$db->hapus($_GET['customer_id']);
	header("location:report.php?id=".$_GET['employee_id']."&aksi=report");
}
?>