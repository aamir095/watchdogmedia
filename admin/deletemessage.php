<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deletemessage($conn,$userId)){
	showmsg('Message Deleted Successfully','success');
	redirection('managemessage.php');
}}
?>