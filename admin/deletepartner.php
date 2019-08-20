<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deletePartner($conn,$userId)){
	showmsg('Added Partner Deleted Successfully','success');
	redirection('managepartners.php');
}}
?>