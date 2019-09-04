<?php

function insertMessage($conn,$data)
{
	$stmt=$conn->prepare('INSERT INTO mmt_message (`name`,`email`,`telephone`,`message`,`view`) VALUES (:name,:email,:telephone, :message, :view) ');
	$stmt->bindparam(':name',$data['name']);
	$stmt->bindparam(':email',$data['email']);
	$stmt->bindparam(':telephone',$data['telephone']);
	$stmt->bindparam(':view',$data['view']);
	$stmt->bindparam(':message',$data['message']); 
	

	if($stmt->execute())
		return true;

		return false;
}
function seeMessage($conn){
	$stmt=$conn->prepare('SELECT COUNT(view) FROM mmt_message WHERE view=1');
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

		return false;

}

function lookMessage($conn){
	

	$stmt=('UPDATE mmt_message SET view=0 WHERE view=1');
	$conn->query($stmt);
	return true;
}

function getAllMessage($conn)
{
	$stmt1=('UPDATE mmt_message SET view=0 WHERE view=1');
	$conn->query($stmt1);
	$stmt=$conn->prepare('SELECT * FROM mmt_message');
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

		return false;
}


 function deletemessage($conn,$id)
{
	//$user = getBlogById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_message WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
	
	return false;
}
