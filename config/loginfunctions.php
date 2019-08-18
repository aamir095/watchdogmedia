<?php

function getLoginDetail($conn,$data)
{
	$data['password'] = md5($data['password']);
	$stmt = $conn->prepare("SELECT * FROM mmt_admin WHERE email=:email AND password=:password AND status='active' ");
	$stmt->bindParam(':email',$data['email']);
	$stmt->bindParam(':password',$data['password']);
	if($stmt->execute())
	{
		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
		if($stmt->rowCount()>0)
		{
			$info = $stmt->fetch();
			$_SESSION['email'] = $info['email'];
			$_SESSION['role'] = $info['role'];
			$_SESSION['f_name']=$info['f_name'];

		return true;
	
		}
			}
}


function checkAdminLogin()
{
	if(isset($_SESSION['email']) && isset($_SESSION['role']))
	return true;

	return false;
}

function logout(){

	session_destroy();
	return true;
}