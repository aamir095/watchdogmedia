<?php

function uploadPackageImage($path,$file)
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
function insertPackage($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_package(`package_name`,`duration`,`location`,`price`,`status`,`image_path`) VALUES (:package_name, :duration, :location,:price,:status,:image_path)");
	$stmt->bindParam(':package_name',$data['package_name']);
	$stmt->bindParam(':duration',$data['duration']);
	$stmt->bindParam(':location',$data['location']);
	$stmt->bindParam(':price',$data['price']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);

	if($stmt->execute())
		return true;


	return false;
}
function getAllPackages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_package");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAllActivePackages($conn)
{
	$stmt=$conn->prepare("SELECT * FROM mmt_package WHERE status='active' LIMIT 6");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getPackageById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_package WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updatePackage($conn,$data)
{
	
	if (isset($data["image_path"])){
	$stmt = $conn->prepare("UPDATE mmt_package SET package_name=:package_name, duration=:duration, location=:location,price=:price,status=:status,image_path:image_path WHERE id=:id");
	$stmt->bindParam(':package_name',$data['package_name']);
	$stmt->bindParam(':duration',$data['duration']);
	$stmt->bindParam(':location',$data['location']);
	$stmt->bindParam(':price',$data['price']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':id',$data['id']);
	
}
else
{
	$stmt = $conn->prepare("UPDATE mmt_package SET package_name=:package_name, duration=:duration, location=:location,status=:status,price=:price WHERE id=:id");
	$stmt->bindParam(':package_name',$data['package_name']);
	$stmt->bindParam(':duration',$data['duration']);
	$stmt->bindParam(':location',$data['location']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':price',$data['price']);
	$stmt->bindParam(':id',$data['id']);
}
	if($stmt->execute())
		return true;


	return false;
}

function deletePackage($conn,$id)
{
	$user = getUserById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_package WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
	


	return false;
}