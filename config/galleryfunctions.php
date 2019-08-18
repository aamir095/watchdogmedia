 <?php


function uploadgalleryimage($path,$file,$data,$conn)
{

 $imagenumber=count($_FILES['file']["name"]);
 $images = array();
 for($x=0;$x<$imagenumber;$x++)
   {

   $source=$file['tmp_name'][$x];
   $oldname=$file['name'][$x];
   $temp=explode('.', $oldname);
   $newname=md5(rand(111111,999999).time().$temp[0]). "." .$temp[1];

     if (!is_dir($path))		
      mkdir($path,0777);
  	
  	if(move_uploaded_file($source, $path."/".$newname)){
  		array_push($images, $newname);
  	}	
	}
	$images = implode(',', $images);
	$stmt = $conn->prepare("INSERT INTO mmt_gallery(`project_name`,`status`,`position`,`image`) VALUES (:project_name, :status,:position, :image)");
	$stmt->bindParam(':project_name',$data['project_name']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':position',$data['position']);
	$stmt->bindParam(':image',$images);


	if($stmt->execute())
  	return true;
}

function getAllGalleryImages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_gallery");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function deleteImageGallery($conn,$id)
{
	//$user = getProjectCategoryById($conn,$categoidry_id);
	$stmt= $conn->prepare("DELETE FROM mmt_gallery WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
		@unlink("uploads/".$user['images']);
	    return true;
	}
	else  {
			return false;
		}	
	

}
function getAllActiveGalleryImages($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_gallery WHERE status='active' ORDER BY 'position' ASC  ");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getGalleryImagesById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_gallery WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}