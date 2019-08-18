<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteproject($conn,$userId)){
	showmsg('Project Deleted Successfully','success');
	redirection('manageproject.php');
}}
?>