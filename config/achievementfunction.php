<?php


function addachievement($conn,$data){

	$stmt = $conn->prepare("INSERT INTO mmt_achievement(`title`, `achievement_description`, `start_year`, `start_month`, `end_year`, `client`, `end_month`, `work_1`, `work_2`, `work_3`, `work_4`,`work_5`,`status`) VALUES (:title, :achievement_description, :start_year, :start_month, :end_year, :client,:end_month,  :work_1, :work_2, :work_3,:work_4, :work_5,:status)");
	$stmt->bindParam(':title',$data['title']);
	$stmt->bindParam(':achievement_description',$data['achievement_description']);
	$stmt->bindParam(':start_year',$data['start_year']);
	$stmt->bindParam(':start_month',$data['start_month']);
	$stmt->bindParam(':end_year',$data['end_year']);
	$stmt->bindParam(':client',$data['client']);
	$stmt->bindParam(':end_month',$data['end_month']);
	$stmt->bindParam(':work_1',$data['work_1']);
	$stmt->bindParam(':work_2',$data['work_2']);
	$stmt->bindParam(':work_3',$data['work_3']);
	$stmt->bindParam(':work_4',$data['work_4']);
	$stmt->bindParam(':work_5',$data['work_5']);
	$stmt->bindParam(':status',$data['status']);
	

	if($stmt->execute())
		return true;


	return false;
		}

function getAllAchievements($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_achievement ORDER BY id DESC");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getAllEvenAchievements($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE id % 2=0");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getAllOddAchievements($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE id % 2=1");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}

function getAchievementById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateAchievement($conn,$data)
{
	
	

		$stmt = $conn->prepare("UPDATE mmt_achievement SET title=:title, achievement_description=:achievement_description, start_year=:start_year, start_month=:start_month, end_year=:end_year, end_month=:end_month, client=:client, work_1=:work_1, work_2=:work_2, work_4=:work_4, work_3=:work_3, work_5=:work_5,status=:status WHERE id=:id");
		$stmt->bindParam(':title',$data['title']);
		$stmt->bindParam(':achievement_description',$data['achievement_description']);
		$stmt->bindParam(':start_year',$data['start_year']);
		$stmt->bindParam(':start_month',$data['start_month']);
		$stmt->bindParam(':end_year',$data['end_year']);
		$stmt->bindParam(':client',$data['client']);
		$stmt->bindParam(':end_month',$data['end_month']);
		$stmt->bindParam(':work_1',$data['work_1']);
		$stmt->bindParam(':work_2',$data['work_2']);
		$stmt->bindParam(':work_3',$data['work_3']);
		$stmt->bindParam(':work_4',$data['work_4']);
		$stmt->bindParam(':work_5',$data['work_5']);
		$stmt->bindParam(':status',$data['status']);
		$stmt->bindParam(':id',$data['id']);
		if($stmt->execute())
		return true;


		return false;
}

function deleteAchievement($conn,$id)
{
	$user = getAchievementById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_achievement WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
		
	return false;

}

function getAllOngoingProject($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE status='ongoing' AND display_status='display' LIMIT 3");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAllCompletedProject($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE status='completed'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
 function getOnGoingProject($conn)
 {
 	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE status='ongoing'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
 }
 function getOnCompletedProject($conn)
 {
 	$stmt= $conn->prepare("SELECT * FROM mmt_achievement WHERE status='completed'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
 }
 function getAllProjectsInWebpage($conn,$end_month=null)
{
	if(empty($end_month))
	{
		$query = "SELECT * FROM mmt_achievement LEFT JOIN seds_projectcategory ON mmt_achievement.end_month=seds_projectcategory.end_month";
	}
	else
	{
		$query = "SELECT * FROM mmt_achievement LEFT JOIN seds_projectcategory ON mmt_achievement.end_month=seds_projectcategory.end_month WHERE mmt_achievement.end_month=".$end_month ;
	}
	$stmt= $conn->prepare($query);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}