<?php

function uploadimageinproject($path,$file)
{

   $source=$file['tmp_name'];
   $oldname=$file['name'];
   $temp=explode('.', $oldname);
   $newname=md5(rand(111111,999999).time().$temp[0]). "." .$temp[1];

  if (!is_dir($path))		
      mkdir($path,0777);
  if(move_uploaded_file($source, $path."/".$newname))
    return $newname;

    return false;  

}
function addproject($conn,$data){

	$stmt = $conn->prepare("INSERT INTO seds_experience(`title`, `project_description`, `location`, `start_date`, `end_date`, `client`, `category_id`, `display_status`,`status`,`image_path`) VALUES (:title, :project_description, :location, :start_date, :end_date, :client,:category_id, :display_status,  :status,:image_path)");
	$stmt->bindParam(':title',$data['title']);
	$stmt->bindParam(':project_description',$data['project_description']);
	$stmt->bindParam(':location',$data['location']);
	$stmt->bindParam(':start_date',$data['start_date']);
	$stmt->bindParam(':end_date',$data['end_date']);
	$stmt->bindParam(':client',$data['client']);
	$stmt->bindParam(':category_id',$data['category_id']);
	$stmt->bindParam(':display_status',$data['display_status']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	

	if($stmt->execute())
		return true;


	return false;
		}

function getAllProjects($conn,$category_id=null)
{
	if(empty($category_id))
	{
		$query = "SELECT * FROM seds_experience LEFT JOIN seds_projectcategory ON seds_experience.category_id=seds_projectcategory.category_id";
	}
	else
	{
		$query = "SELECT * FROM seds_experience LEFT JOIN seds_projectcategory ON seds_experience.category_id=seds_projectcategory.category_id WHERE seds_experience.category_id=".$category_id;
	}
	$stmt= $conn->prepare($query);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}

function getProjectById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM seds_experience WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateProject($conn,$data)
{
	
		if (!empty($data['image_path']))
	{
		$stmt = $conn->prepare("UPDATE seds_experience SET title=:title, project_description=:project_description, location=:location,display_status=:display_status ,start_date=:start_date, end_date=:end_date,  client=:client,  status=:status, image_path=:image_path WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':project_description',$data['project_description']);
		$stmt->bindParam(':location',$data['location']);
		$stmt->bindParam(':start_date',$data['start_date']);
		$stmt->bindParam(':end_date',$data['end_date']);
		$stmt->bindParam(':client',$data['client']);
		$stmt->bindParam(':display_status',$data['display_status']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':image_path',$data['image_path']);
		$stmt->bindParam(':id',$data['id']);
	}
	else
	{
		$stmt = $conn->prepare("UPDATE seds_experience SET title=:title, project_description=:project_description, location=:location, start_date=:start_date, end_date=:end_date, display_status=:display_status, client=:client, status=:status WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':project_description',$data['project_description']);
		$stmt->bindParam(':location',$data['location']);
		$stmt->bindParam(':start_date',$data['start_date']);
		$stmt->bindParam(':end_date',$data['end_date']);
		$stmt->bindParam(':client',$data['client']);
		$stmt->bindParam(':display_status',$data['display_status']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':id',$data['id']);
	}

	if($stmt->execute())
		return true;


	return false;
}

function deleteproject($conn,$id)
{
	$user = getProjectById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM seds_experience WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink("uploads/".$user['image_path']);
		return true;
	}	

	else
	{
	return false;
}
}

function getAllOngoingProject($conn)
{
	$stmt= $conn->prepare("SELECT * FROM seds_experience WHERE status='ongoing' AND display_status='display' LIMIT 3");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAllCompletedProject($conn)
{
	$stmt= $conn->prepare("SELECT * FROM seds_experience WHERE status='completed'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
 function getOnGoingProject($conn)
 {
 	$stmt= $conn->prepare("SELECT * FROM seds_experience WHERE status='ongoing'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
 }
 function getOnCompletedProject($conn)
 {
 	$stmt= $conn->prepare("SELECT * FROM seds_experience WHERE status='completed'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
 }
 function getAllProjectsInWebpage($conn,$category_id=null)
{
	if(empty($category_id))
	{
		$query = "SELECT * FROM seds_experience LEFT JOIN seds_projectcategory ON seds_experience.category_id=seds_projectcategory.category_id";
	}
	else
	{
		$query = "SELECT * FROM seds_experience LEFT JOIN seds_projectcategory ON seds_experience.category_id=seds_projectcategory.category_id WHERE seds_experience.category_id=".$category_id ;
	}
	$stmt= $conn->prepare($query);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}