<?php
function uploadBlogImage($path,$file)
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

function insertBlog($conn,$data)
{
	$stmt = $conn->prepare("INSERT INTO mmt_blog(`blog_title`,`blog_description`,`meta_keywords`,`meta_description`,`status`,`image_path`) VALUES (:blog_title, :blog_description,:meta_keywords, :meta_description,:status, :image_path)");
	$stmt->bindParam(':blog_title',$data['blog_title']);
	$stmt->bindParam(':blog_description',$data['blog_description']);
	$stmt->bindParam(':meta_keywords',$data['meta_keywords']);
	$stmt->bindParam(':meta_description',$data['meta_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);


	if($stmt->execute())
		return true;


	return false;
}
function getAllBlogs($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_blog");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getBlogById($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_blog WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
function updateBlog($conn,$data)
{
	
	if (isset($data['image_path']))
	{
	$stmt = $conn->prepare("UPDATE mmt_blog SET blog_title=:blog_title, blog_description=:blog_description,status=:status, image_path=:image_path WHERE id=:id");
	$stmt->bindParam(':blog_title',$data['blog_title']);
	$stmt->bindParam(':blog_description',$data['blog_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':image_path',$data['image_path']);
	$stmt->bindParam(':id',$data['id']);
	}

	else
	{
	$stmt = $conn->prepare("UPDATE mmt_blog SET blog_title=:blog_title, blog_description=:blog_description,status=:status WHERE id=:id");
	$stmt->bindParam(':blog_title',$data['blog_title']);
	$stmt->bindParam(':blog_description',$data['blog_description']);
	$stmt->bindParam(':status',$data['status']);
	$stmt->bindParam(':id',$data['id']);
	}
	if($stmt->execute())
		return true;


	return false;
}

function deleteBlog($conn,$id)
{
	$user = getBlogById($conn,$id);
	$stmt= $conn->prepare("DELETE FROM mmt_blog WHERE id=:id");
	$stmt->bindParam(':id',$id);
	if($stmt->execute())
	{
	   @unlink("uploads/".$user['image_path']); 	
	   return true;
	}


	return false;
}
function getAllActiveBlogs($conn)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_blog WHERE status='active' ORDER BY id DESC LIMIT 2");
	$stmt->execute();
	if($stmt->rowCount()>0)
		return $stmt->fetchAll();

	return false;
}
function getAllActiveListingBlogs($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_blog WHERE status='active' ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getBlogsInBlogPage($conn)
{

	$stmt= $conn->prepare("SELECT * FROM mmt_blog WHERE status='active'  ORDER BY id DESC LIMIT 10 ");
	$stmt->execute();
	if($stmt->rowCount()>0)
	return $stmt->fetchAll();

	return false;
}
function getBlogByIdInHomePage($conn,$id)
{
	$stmt= $conn->prepare("SELECT * FROM mmt_blog WHERE id=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	if($stmt->rowCount()>0)
		return $stmt->fetch();

	return false;	
}
