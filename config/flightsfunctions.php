<?php

function uploadFlightImage($path,$file)
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
function insertFlight($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_flight(`flight_name`,`from_origin`,`to_destination`,`original_price`,`discount_price`,`status`,`image_path`) VALUES (:flight_name, :from_origin, :to_destination,:original_price,:discount_price,:status,:image_path)");
	$stmt->bindParam(':flight_name',$data['flight_name']);
	$stmt->bindParam(':from_origin',$data['from_origin']);
	$stmt->bindParam(':to_destination',$data['to_destination']);
	$stmt->bindParam(':original_price',$data['original_price']);
	$stmt->bindParam(':discount_price',$data['discount_price']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);

	if($stmt->execute())
		return true;


	return false;
}
function getAllFlights($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_flight");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAllActiveFlights($conn)
{
	$stmt=$conn->prepare("SELECT * FROM mmt_flight WHERE status='active' LIMIT 6");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getFlightById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_flight WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateFlight($conn,$data)
{
	
	if (isset($data['image_path'])){
	$stmt = $conn->prepare("UPDATE mmt_flight SET flight_name=:flight_name, from_origin=:from_origin, to_destination=:to_destination, original_price=:original_price, discount_price=:discount_price, status=:status, image_path=:image_path WHERE id=:id");

	$stmt->bindParam(':flight_name',$data['flight_name']);
	$stmt->bindParam(':from_origin',$data['from_origin']);
	$stmt->bindParam(':to_destination',$data['to_destination']);
	$stmt->bindParam(':original_price',$data['original_price']);
	$stmt->bindParam(':discount_price',$data['discount_price']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':id',$data['id']);
	
}
else
{
	$stmt = $conn->prepare("UPDATE mmt_flight SET flight_name=:flight_name, from_origin=:from_origin, to_destination=:to_destination, original_price=:original_price, discount_price=:discount_price, status=:status WHERE id=:id");
	$stmt->bindParam(':flight_name',$data['flight_name']);
	$stmt->bindParam(':from_origin',$data['from_origin']);
	$stmt->bindParam(':to_destination',$data['to_destination']);
	$stmt->bindParam(':original_price',$data['original_price']);
	$stmt->bindParam(':discount_price',$data['discount_price']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);
}
	if($stmt->execute())
		return true;


	return false;
}

function deleteFlight($conn,$id)
{
	$user = getUserById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_flight WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
	


	return false;
}