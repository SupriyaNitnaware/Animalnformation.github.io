<?php
    // put your code here
       $servername="localhost";
        $username="root";
        $password="";
        $dbname="pixel6drive";
        error_reporting(0);

         //create connection
         $con=new mysqli($servername, $username, $password , $dbname);

         //check connection
         if($con->connect_error)
         {
             die("Connection failed :" .$con->connect_error);
         }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>hi</h1>

    <?php
        $a=0;
        echo $a=a+1;
    ?>

    <!-- <a href="animal_list.php" class="button">Show the animal list</a> -->
    <form action="" method="get">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
       if(isset($_GET['submit']))
       {
    ?>       
        <table border="1" class="box-2">
        <th>Sr.No.</th> 
        <th>Animal Name</th> 
        <th>Category</th>
        <th>Image</th> 
        <th>Description</th> 
        <th>Life expectancy</th>
       
    
    <?php
        
         $query="select * from animal_info ";
         $result=$con->query($query);
         while($row=$result->fetch_array())
         {
    ?>
            <tr>
                <td><?php echo $row['srno']?></td>
                <td><?php echo $row['namee']?></td>
                <td><?php echo $row['categoryy']?></td>
                <td><a href="images/<?php echo $row['images']?>" target="_blank"><img src="images/<?php echo $row['images']?>" height ='70' width='100'><a></td>
                <td><?php echo $row['descri']?></td> 
                <td><?php echo $row['life']?></td>
            </tr>
    <?php
         }
    ?>
        </table>
        <?php
         }
    ?>
</body>
</html>


