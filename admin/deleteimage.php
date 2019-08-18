<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteimage($conn,$userId)){
	showmsg('Image Deleted Successfully','success');
	redirection('manageimageslider.php');
}}
?>