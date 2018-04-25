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
    if(isset($_POST["product_id"])){
        $x   =$_POST["product_id"];
      if(!$conn){
         die("failed".mysqli_connect_error());
        
            }
        else
            {
           $sql="DELETE FROM `products` WHERE `products`.`id` = '$x'";
                if(mysqli_query($conn,$sql)){
                    echo "the product has been deleted";
                }
                else {
                    echo "product not found";
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
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Delete some products</h1>
        <div>
        <form action="Delete.php" method="post">
        <input type="number" name="product_id" required placeholder="enterIdDelete" />
            <br>
        <input type="submit">
            </form>
            <a href = 'logout.php' >logout</a>
        </div>
        
    </body>
</html>                                                                                                                 