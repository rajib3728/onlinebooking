<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="logo.png">
    <title>booking status</title>
	<style>
        body {
    background-image: url('img2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    
  }
  .st
	 {
	   display:flex;
	   justify-content:center;	
	 }
     .st1
	 {
		margin-top:100px;
		width:500px;
    	height: 400px;
   		background-color: white;
    	border-radius: 20px;
    	color:rgb(246, 34, 34);
		text-align:center;
	 }
	 #img1
{
    border-radius: 15px;
    margin-top: 40px;
    margin-bottom: 10px;
}
  </style>
</head>
<body>
<center>
		<div class="st">
	<div class="st1">
	<img src="logo.png" width="100px" height="100px" id="img1">
	<br>
<?php
// database connection code
if(isset($_POST['txtEmail']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$con = mysqli_connect('localhost', 'root','','db_contact');
$con = mysqli_connect('sql12.freesqldatabase.com', 'sql12605221','68VjGvBzw3','sql12605221');
// get the post records

/*$txtName = $_POST['txtName'];

$txtMessage = $_POST['txtMessage'];
*/
// database insert SQL code
//$sql = "INSERT INTO tbl_contact (fldName,fldEmail,fldPhone,fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$sql="DELETE FROM tbl_contact WHERE fldEmail='$txtEmail' AND fldPhone='$txtPhone'";
// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "cancel booking succssful";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
$con->close();
?>
<body>
	</html>