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
function insertPartner($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_partner(`partner_name`,`website`,`status`,`image_path`) VALUES (:partner_name, :website, :status, :image_path)");
	$stmt->bindParam(':partner_name',$data['partner_name']);
	$stmt->bindParam(':website',$data['website']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);

	if($stmt->execute())
		return true;


	return false;
}
function getAllPartners($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_partner");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getAllActivePartners($conn)
{
	$stmt=$conn->prepare("SELECT * FROM mmt_partner WHERE status='active' ");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}

function getPartnerById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_partner WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updatePartner($conn,$data)
{
	
	if (isset($data['image_path'])){
	$stmt = $conn->prepare("UPDATE mmt_partner SET partner_name=:partner_name, website=:website, status=:status, image_path=:image_path WHERE id=:id");

	$stmt->bindParam(':partner_name',$data['partner_name']);
	$stmt->bindParam(':website',$data['website']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':id',$data['id']);
	
}
else
{
	$stmt = $conn->prepare("UPDATE mmt_partner SET partner_name=:partner_name, website=:website, status=:status WHERE id=:id");
	$stmt->bindParam(':partner_name',$data['partner_name']);
	$stmt->bindParam(':website',$data['website']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);
}
	if($stmt->execute())
		return true;


	return false;
}

function deletePartner($conn,$id)
{
	$user = getUserById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_partner WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	return true;
	


	return false;
}