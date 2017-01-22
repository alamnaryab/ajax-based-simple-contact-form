<?php
	//connect to database
	$db_host = "localhost";
    $db_user = "root";
    $db_pwd  = "";
    $db_name = "test";
    $db= new mysqli($db_host,$db_user,$db_pwd,$db_name);
	if($db->connect_error)
	{
		echo "ERROR: (".$db->connect_errno.") ".$db->connect_error;
		exit();
	}
	
	//check if POST request is made(via normal for submission or ajax)
	if($_POST){
		//collect post variable data
		$name = clean($_POST['txtName']);
		$email = clean($_POST['txtEmail']);
		$company = clean($_POST['txtCompany']);
		$phone = clean($_POST['txtPhone']);
		$message = clean($_POST['txtMessage']);
		
		//make query
		$qry = 'insert into tbl_contacts (name,email,company,phone,message) values(
			"'.$name.'",
			"'.$email.'",
			"'.$company.'",
			"'.$phone.'",
			"'.$message.'"
		)';
		//echo $qry; /*debug qry*/
		
		if($result = $db->query($qry)){
			echo 'Message sent successfully, we will get intouch with you soon.';
		}else{
			echo $db->error;
		}
		
		
		
	}//end if post
	
	/*function to escape special chars
	to prevent sql injection	*/
	function clean($str){
		global $db;
		return $db->real_escape_string($str);
	}//end clean()
?>
