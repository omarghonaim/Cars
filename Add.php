<?php
    
    if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"])){
    $id             =$_POST["id"];
    $name           =$_POST["name"];
    $price          =$_POST["price"];
    $server     ="localhost";
    $username   ="root";
    $password   ="";
    $db         ="itproject";
    $conn       =mysqli_connect($server,$username,$password,$db);
    if(!$conn){
        die("failed".mysqli_connect_error());
        
    }
   else
    {   
            echo "<h2>u can add more if u want</h2>";
            $sql="INSERT INTO `products`(`id`, `name`, `price`) VALUES ('$id','$name','$price')";
            
            if(mysqli_query($conn,$sql)){
                echo "added Successfully";
            }
            else{
                echo "already exits";
            }
            
            
        }
        mysqli_close($conn);
        
}
            echo " <div class='success'>
                    <a href='Add.php'>Add</a> here u can add some products <br>
                    <a href='Delete.php'>Delete</a>  u can delete products  <br> 
                    <a href='Update.php'>Update</a>    update some products   <br>
                    <a href='Select.php'>Buy</a>u can choose which product u want buy
            </div>";

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <h1> addCars</h1>
        <div>
        <form action="" method="post">
            <input type="number" name="id" required placeholder="idOfProduct" /><br>
            <input type="text"   name="name" required placeholder="nameOfProduct" /><br>
            <input type="number" name="price" required placeholder="priceOfProduct" />
            <br>
        <input type="submit">
        </form>
        </div>
         <a href = 'logout.php' >logout</a>
    </body>
</html> 