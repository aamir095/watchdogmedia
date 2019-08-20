<?php 
include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin()){
if(deleteAchievement($conn,$userId)){
	showmsg('Achievement Deleted Successfully','success');
	redirection('manageachievements.php');
}}
?>