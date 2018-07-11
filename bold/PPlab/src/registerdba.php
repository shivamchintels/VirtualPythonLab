<?php
session_start();
$con=mysqli_connect('localhost','root','');
if($con){
	
}else{
	echo"error";
}
mysqli_select_db($con,'dbs');
if(isset($_POST['email'])) 
{
	
    $username = $_POST['username'];
    $email=$_POST['email'];
     
     $password = ($_POST['password']);
     $q = " SELECT * FROM dba WHERE  user ='$username' ";

     
     $result = mysqli_query($con, $q);
     $num = mysqli_num_rows($result);

    if($num == 1){
    	echo"Already Register";
    }else{
    	$qy="INSERT INTO dba(user,email,password) VALUES('$username','$email','$password') ";
        mysqli_query($con, $qy); 
        $_SESSION['username']=$username;    
    header("location:homepagenew1.php");
    }
}

?>
