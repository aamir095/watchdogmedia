<?php

function addcategory($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO seds_projectcategory(`project_category`, `category_description`) VALUES (:project_category, :category_description)");
	$stmt->bindParam(':project_category',$data['project_category']);
	$stmt->bindParam(':category_description',$data['category_description']);

	if($stmt->execute())
		return true;


	return false;
}

function getAllProjectCategory($conn)
{
	$stmt= $conn->prepare("SELECT * FROM seds_projectcategory");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}

function updateProjectCategory($conn,$data)
{
	
	
		$stmt = $conn->prepare("UPDATE seds_projectcategory SET project_category=:project_category, category_description=:category_description WHERE category_id=:category_id");
		$stmt->bindParam(':project_category',$data['project_category']);
		$stmt->bindParam(':category_description',$data['category_description']);
		//$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':category_id',$data['category_id']);
	if($stmt->execute())
		return true;
	return false;
}
function getProjectCategoryById($conn,$category_id)
{
	$stmt= $conn->prepare("SELECT * FROM seds_projectcategory WHERE category_id=:category_id");
	$stmt->bindParam(':category_id',$category_id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function deleteprojectCategory($conn,$category_id)
{
	$user = getProjectCategoryById($conn,$category_id);
	$stmt= $conn->prepare("DELETE FROM seds_projectcategory WHERE category_id=:category_id");
	$stmt->bindParam(':category_id',$category_id);
	if($stmt->execute())
	return true;
		
	return false;

}