<?php
function uploadProgramImage($path,$file)
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

function insertProgram($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_program(`tv_title`,`tv_description`,`status`,`image_path`) VALUES (:tv_title, :tv_description,:status, :image_path)");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);


	if($stmt->execute())
		return true;


	return false;
}
function getAllPrograms($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_program");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getProgramById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_program WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateProgram($conn,$data)
{
	
	if (isset($data['image_path']))
	{
	$stmt = $conn->prepare("UPDATE mmt_program SET tv_title=:tv_title, tv_description=:tv_description,status=:status, image_path=:image_path WHERE id=:id");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':id',$data['id']);
	}

	else
	{
	$stmt = $conn->prepare("UPDATE mmt_program SET tv_title=:tv_title, tv_description=:tv_description,status=:status WHERE id=:id");
	$stmt->bindParam(':tv_title',$data['tv_title']);
	$stmt->bindParam(':tv_description',$data['tv_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);
	}
	if($stmt->execute())
		return true;


	return false;
}

function deleteProgram($conn,$id)
{
	$user = getProgramById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_program WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
	   @unlink("uploads/".$user['image_path']); 	
	   return true;
	}


	return false;
}
function getAllActivePrograms($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_program WHERE status='active' ORDER BY id DESC LIMIT 2");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getAllActiveListingBlogs($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_program WHERE status='active' ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getBlogsInBlogPage($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_program WHERE status='active'  ORDER BY id DESC LIMIT 10 ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getBlogByIdInHomePage($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_program WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
