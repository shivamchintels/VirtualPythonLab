

<!DOCTYPE html>
<html>
<head>  
	<title>register</title>
</head>
<style type="text/css">
		table{

		
outline-width: 10px solid grey;
		width: 49%;
font-size: 20px;
font-family: "Roboto",sans-serif;
margin-top: 0px;
margin-bottom: 0px;

position:relative;




	}


	
	h1{
		
		background-color: #B0C4DE;
	    
		color: white;
		border-radius: 1.9px;
		padding-bottom: 10px;
		padding-top: 10px;
		width: 90%;
	}
p{
	padding-top: 0px;
	
}

	
	
	
	input[type=text], input[type=password]{
		width: 90%;
		padding: 12px 20px;
		margin: 8px 26px;
		display: inline-block;;
		border:1px solid #ccc;
		box-sizing: border-box;
		font-size: 26px;
		border-radius: 5px;
		font-family: monospace;

	}
		button{
		background-color: #4CAF50;
		color: white;
		padding: 18px 26px;
		margin: none;
		cursor: pointer;
		width:90%;
		font-size: 26px;
		border-radius: 4px;
	}
		button:hover{
		opacity: .8;
	}
	a{
		text-decoration: none;
	}
	
</style>


<body bgcolor="#eee">
	<form method="POST" action="registerdba.php">
	
	<table align="center"><th>
		
	<center><h1>Sign Up</h1></center>
	<br>
	
<input type="text" name="username" placeholder="username" required><br><br>
<input type="text" name="email" placeholder="e-mail" required="@"><br><br>
<input type="password" name="password" placeholder="password" required><br><br>
<button  type="submit"  value="Sign up " >Sign-up</button><br><br>
<h4>Already register?<a href="login.php">Log-in</a></h4></th>

</table>
</form>

</body>
</html>