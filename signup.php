
<?php
    if(isset($_POST["username"]) && isset($_POST["password"])){
            $usr    = $_POST["username"];
            $pass   = $_POST["password"];
            $server     ="localhost";
   		    $usernam   ="root";
    		$password   ="";
   		    $db         ="itproject";
    		$conn       =mysqli_connect($server,$usernam,$password,$db);
  		  if(!$conn){
      		  die("failed".mysqli_connect_error());
        
   		 }
   		 else{
   		 	$sql  = "INSERT INTO `users`(`id`, `username`, `passwords`) VALUES ('null','$usr','$pass')";
   		 	if(mysqli_query($conn,$sql)){
   		 		echo "thank you for signup , now u can login";
   		 		echo "<a href = 'home.php' > login </a> ";
   		 	}
   		 	else
   		 	{
   		 		echo"user already exits";
   		 	}

   		 }

   		 mysqli_close($conn);

       }


?>



<!DOCTYPE html>
<html>
<head>
	<title>signUp</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>	
		<div class="homePage">
            <form action="signup.php" method="post">
                <input type="text" name="username"  placeholder="userName" style="width:325px" id="input1" ><p id="p1"></p>
                <input type="password" name="password"  placeholder="Password" style="width:325px" id="input2" ><p id="p2"></p>
                <input type="submit" value="signUp" style="width:325px" id="login"> 
            </form>
        </div>
             <script src="Validation.js"></script>
</body>
</html>