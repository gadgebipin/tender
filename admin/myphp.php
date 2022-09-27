<?php
require_once"dbconfig.php";
require_once"validation.php";
##################################################
if(isset($_REQUEST['signup']))
{
	$name=trim($_REQUEST['name']);
	$mobile=trim($_REQUEST['mobile']);
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	$query="insert into user (name,mobile,email,password)
	values
	('$name','$mobile','$email','$password')";
	if(checklength($name,2))
	{
		echo"invalid name";
		$valid=false;
	}
	if(!checkmobile($mobile))
	{
		echo"invalid mobile";
		$valid=false;
	}
	if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	if(checklength($password, 6))
	{
		echo"invalid password";
		$valid=false;
	}
	if($password!=$cpassword)
	{
		echo"password not match";
		$valid=false;
	}
	if($valid)
	{
	$n=iud($query);
	if($n==1)
	{
		echo"1";
	}
	else
	{
		echo"something wrong";
	}
	}
	}
###########################################################
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from user where email='$email' and password='$password'";
	
	if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	if(checklength($password, 6))
	{
		echo"invalid password";
		$valid=false;
	}
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['userid']=$userid;
		$_SESSION['name']=$name;
		$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		echo"1";
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}

#############################################
if(isset($_REQUEST['change']))
	{
	$userid=$_SESSION['userid'];	
	$oldpassword=trim($_REQUEST['oldpassword']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	$query="update user set password='$newpassword' where password='$oldpassword' and userid='$userid'";
	
	
	if(checklength($oldpassword, 6))
	{
		echo"invalid old password";
		$valid=false;
	}
	if(checklength($newpassword, 6))
	{
		echo"invalid New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"both password not matched";
		$valid=false;
	}
	if($valid)
	{
	$n=iud($query);
	
	if($n==1)
	{		
       echo"1";
	}
	else
	{
		echo"something wrong";
	}
	}
		
	}

#######################################################
if(isset($_REQUEST['forget']))
	{
	$email=trim($_REQUEST['email']);

	$qty=time();
	$otp=md5($email.$qty);
	$valid=true;
	if(strlen($otp)!=32)
		{
			echo "invalid otp";
			$valid=false;
		}
		if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	
	$query="update user set otp='$otp' where email='$email' ";
	
if($valid){
	$n=iud($query);
if($n==1)
{
	echo"1";
}
else
{
	echo"Invalid forget password";
}
}
}
	
################################################
if(isset($_REQUEST['reset']))
{
	$otp=trim($_REQUEST['otp']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	if(strlen($otp)!=32)
	{
		echo"invalid otp";
		$valid=false;
	}
	if(checklength($newpassword, 6))
	{
		echo"invalid  New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"Password and Confirm Password is not match";
		$valid=false;
	}
	$query="update user set password='$newpassword',otp='' where otp='$otp'";
	
	if($valid)
	{
		$n=iud($query);
	if($n==1)
	{
		echo"1";
	}
	else
	{
		echo "something wrong";
	}
	}
}
###########################################################################
if(isset($_REQUEST['upload']))
{
 
$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
$userid=$_SESSION['userid'];
	$query="update user set image='$name' where userid='$userid'";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 $_SESSION['image']=$name;
		 echo"<script>alert('Image uploaded successfully');
		 window.location='change_image.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"image is not upload";
	}
	
	
	
	
	
}
##########################################################################
if(isset($_REQUEST['project_submit']))
{
	extract($_REQUEST);
	$error=$_FILES["image"]["error"];

$name=$_FILES["image"]["name"];
$type=$_FILES["image"]["type"];
$size=$_FILES["image"]["size"];
$tmp_name=$_FILES["image"]["tmp_name"];

	$query="insert into project (  `title`, `keyword`, `mdiscription`, `category`, `image`, `videolink`, `discription`) values 
	('$title','$metakey','$metadis','$category','$name','$video_link','$projectdis')";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Project uploaded successfully');
		 window.location='view_project_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"Project is not upload";
	}
}
###################################################################################################
if(@$_REQUEST['delete']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("DELETE FROM `project` WHERE id='$id'");
if($n==1)
{
	header("location:view_project_list.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_project_list.php';
		 </script>";
}
}	
###############################################

	if(@$_REQUEST['edit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_project.php?id=$id");
}
###################################################	
if(isset($_REQUEST['Update_project']))
{
	extract($_REQUEST);
	$error=$_FILES["uimage"]["error"];

$name=$_FILES["uimage"]["name"];
$type=$_FILES["uimage"]["type"];
$size=$_FILES["uimage"]["size"];
$tmp_name=$_FILES["uimage"]["tmp_name"];

$query="UPDATE `project` SET `title`='$utitle',`keyword`='$umetakey',`mdiscription`='$umetadis',
`category`='$ucategory',`image`='$name',`videolink`='$uvideo_link',`discription`='$uprojectdis' WHERE id='$uid'";
	
	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Project Updated successfully');
		 window.location='view_project_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Project is not Update ');
		 window.location='view_project_list.php';
		 </script>";
	}
}
	#####################################################################
	if(isset($_REQUEST['blog_submit']))
{
	echo"gkjhdkjghdkjh";
	extract($_REQUEST);
	$error=$_FILES["image"]["error"];

$name=$_FILES["image"]["name"];
$type=$_FILES["image"]["type"];
$size=$_FILES["image"]["size"];
$tmp_name=$_FILES["image"]["tmp_name"];

	$query="insert into  `blog`( `category`, `title`, `keyword`, `short_dis`, `image`, `blog_dis`) VALUES  
	('$category','$title','$metakey','$shortdis','$name','$blogdis')";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Blog uploaded successfully');
		 window.location='view_blog_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Blog is not upload');
		 window.location='view_blog_list.php';
		 </script>";
	}
}
#########################################################################################
###################################################################################################
if(@$_REQUEST['blogdelete']=='yes')
{
$id=$_REQUEST['id'];
$n=iud("DELETE FROM `blog` WHERE blogid='$id'");
if($n==1)
{
	header("location:view_blog_list.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_blog_list.php';
		 </script>";
}
}	
###############################################

	if(@$_REQUEST['blogedit']=='yes')
{
	$id=$_REQUEST['id'];
	header("location:edit_blog.php?id=$id");
}
	###########################################################
if(isset($_REQUEST['update_blog']))
{
	extract($_REQUEST);
	$error=$_FILES["uimage"]["error"];

$name=$_FILES["uimage"]["name"];
$type=$_FILES["uimage"]["type"];
$size=$_FILES["uimage"]["size"];
$tmp_name=$_FILES["uimage"]["tmp_name"];

$query="UPDATE `blog` SET `category`='$ucategory',`title`='$utitle',`keyword`='$umetakey',`short_dis`='$ushortdis',`image`='$name',`blog_dis`='$ublogdis' WHERE blogid='$ublogid'";
	
	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Blog Updated successfully');
		 window.location='view_blog_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Blog is not Update ');
		 window.location='view_blog_list.php';
		 </script>";
	}
}	
	####################################################################
if(@$_REQUEST['delete_enquiry']=='yes')
{
$id=$_REQUEST['id'];

		 
$n=iud("DELETE FROM `download_enquiry` WHERE cus_id='$id'");
if($n==1)
{
	echo"<script>
	
	alert('Successful');
		 window.location='enquiry.php';
		 </script>";
}
		 
else
{
	echo"<script>alert('Something Wrong');
		 window.location='enquiry.php';
		 </script>";
}
}	
	
	
	
##########################################################################
	
	   
	
	
	










?>