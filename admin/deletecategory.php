<?php 

include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin())
{
if(deleteProjectCategory($conn,$userId)){
	showmsg('Project Category Deleted Successfully','success');
	redirection('managecategory.php');
}
}
?>