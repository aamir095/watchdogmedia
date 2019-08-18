<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteUser($conn,$userId)){
	showmsg('User Deleted Successfully','success');
	redirection('manageusers.php');
}}
?>