<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteImageGallery($conn,$userId)){
	showmsg('Gallery Deleted Successfully','success');
	redirection('managegallery.php');
}}
?>