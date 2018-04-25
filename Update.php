<?php
    $server     ="localhost";
    $username   ="root";
    $password   ="";
    $db         ="itproject";
    $conn       =mysqli_connect($server,$username,$password,$db);
        echo "<p>our products below </p>";
        $sql_get = "SELECT * FROM `products`";
        $result  = mysqli_query($conn,$sql_get);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                    echo "id -> ".$row['id']."   "." Name-> " .$row['name']." Price-> ".$row['price']."<br>";
                    }
            }
         if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"])){
                    $id    =$_POST["id"];
                    $name  =$_POST["name"];
                    $price =$_POST["price"];
                 if(!$conn){
                        die("failed".mysqli_connect_error());
                    }
                else
                {
                    $sql="UPDATE `products` SET `name`='$name',`price`='$price' WHERE id ='$id' ";
                    if(mysqli_query($conn,$sql)){
                            echo "<p>our products below after update</p>";
                            $sql_get = "SELECT * FROM `products`";
                            $result  = mysqli_query($conn,$sql_get);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                echo "id -> ".$row['id']."   "." Name-> " .$row['name']." Price-> ".$row['price']."<br>";
                                }
                            }
                        
                    }
                      else {
                        echo "error";
                }
         }
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
        <title>update</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <h1>here u can update</h1>
        <form action="" method="post">
            <input type="number" name="id" required placeholder="idOfProduct" /><br>
            <input type="text"   name="name" required placeholder="nameOfProduct" /><br>
            <input type="number" name="price" required placeholder="priceOfProduct" />
            <br>
        <input type="submit">
        </form>
    
     <a href = 'logout.php' >logout</a>
    
    </body>
</html>