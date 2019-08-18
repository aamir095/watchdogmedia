<?php 



include '../config/call.php';
$userId = $_GET['ref'];
if  (checkAdminLogin())
{
if(deleteBlog($conn,$userId)){
	showmsg('Blog Deleted Successfully','success');
	redirection('manageblogs.php');
}
}
?>