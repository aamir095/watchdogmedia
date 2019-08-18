<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteFlight($conn,$userId)){
	showmsg('Added Flight Deleted Successfully','success');
	redirection('manageflights.php');
}}
?>