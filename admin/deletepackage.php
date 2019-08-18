<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deletePackage($conn,$userId)){
	showmsg('Package Deleted Successfully','success');
	redirection('managepackages.php');
}}
?>