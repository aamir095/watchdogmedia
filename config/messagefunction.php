<?php

function insertMessage($conn,$data)
{
	$stmt=$conn->prepare('INSERT INTO seds_message (`name`,`email`,`telephone`,`subject`,`message`) VALUES (:name,:email,:telephone,:subject,:message) ');
	$stmt->bindparam(':name',$data['name']);
	$stmt->bindparam(':email',$data['email']);
	$stmt->bindparam(':telephone',$data['telephone']);
	$stmt->bindparam(':subject',$data['subject']);
	$stmt->bindparam(':message',$data['message']); 

	if($stmt->execute())
		return true;

		return false;
}

function getAllMessage($conn)
{
	$stmt=$conn->prepare('SELECT * FROM seds_message');
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

		return false;
}


 function deletemessage($conn,$id)
{
	//$user = getBlogById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM seds_message WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
	
	return false;
}
