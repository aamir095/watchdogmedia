<?php 

include '../config/call.php';
$userId = $_GET['ref'];
if(checkAdminLogin())
{
if(deleteProgram($conn,$userId)){
	showmsg('Program Deleted Successfully','success');
	redirection('manageprogram.php');
}
}
?>