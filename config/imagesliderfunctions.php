<?php 

function uploadimage($path,$file)
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

function insertintodatabase($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_imageslider(`image_title`,`image_path`,`position`,`status`) VALUES (:image_title, :image_path,:position, :status)");
	$stmt->bindParam(':image_title',$data['image_title']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':position',$data['position']);
	$stmt->bindParam(':status',$data['status']);


	if($stmt->execute())
		return true;


	return false;
}
function getAllImages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_imageslider");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getImageById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_imageslider WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateImage($conn,$data)
{
	if (isset($data["image_path"]))
	{

	$stmt = $conn->prepare("UPDATE mmt_imageslider SET image_title=:image_title, image_path=:image_path, position=:position, status=:status WHERE id=:id");
	$stmt->bindParam(':image_title',$data['image_title']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':position',$data['position']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);

	
	}
	else
	{
	$stmt = $conn->prepare("UPDATE mmt_imageslider SET image_title=:image_title,  position=:position, status=:status WHERE id=:id");
	$stmt->bindParam(':image_title',$data['image_title']);
	$stmt->bindParam(':position',$data['position']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);
	
	}

	if($stmt->execute())
	return true;


	return false;
}
function deleteimage($conn,$id)
{
	$user = getImageById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_imageslider WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink("uploads/".$user['image_path']);
		return true;
	}
	


	return false;
}
function getAllActiveImages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_imageslider WHERE status='active' ORDER BY id ASC");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}