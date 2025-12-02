<?php
$name="";
$name1="";
$size="";
$temp="";
if(isset($_POST['submit']))
{
	echo "<pre>";
//	print_r($_FILES["image"]);
	$name=($_FILES["image"]["name"]);
	$size=($_FILES["image"]["size"]);
	$type=explode(".",$name);
	$extension=$type[1];
	echo $extension."<br>";
	$type1=array("jpeg");
	
	if(in_array($extension,$type1))
	{
		$name1=($_FILES["image"]["name"]);
		
	}
	else
	{
		echo " Only Allow TO jpeg Files :-  ";
		
	}
	
/*
    if($size<1226585)
	{
		$name=($_FILES["image"]["name"]);
	}  
	else
	{                                  
		echo "image not uploading";
	}
  
*/                                      

	$temp=$_FILES["image"] ["name"];
	$target="upload/". $_FILES["image"] ["name"];
	
	if(move_uploaded_file($temp,$target))
	{
		$target1=$target;
		
	}
	else
	{
		echo "File Is Not Upload :- ";
			
	}

}
?>

<!DOCTYPE html>
<html>
<body>

  <form action="" method="post" enctype="multipart/form-data">
    select image to upload:
	<br><br><input type="file" name="image">
	<br><br><input type="submit" value="upload image" name="submit">
	<br><br><img src="<?php echo $name1;  ?>" alt="image" width="20%" height="20%">
	
</form>	
<body>
</html>