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
    <title>Submission Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="h1">Animal Information</h1>

    <form name="home"  method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="column">
                <div class="box-1">
                    <label> Name of the animal </label></br>
                    <input type="text" name="anm" required></br></br>

                    <label>Select Category </label></br>
                    <input type="radio" name="cat"  value="omnivores" required>omnivores
                    <input type="radio" name="cat"  value="herbivores" required>herbivores
                    <input type="radio" name="cat"  value="carnivores" required>carnivores</br></br>

                    <label >Select Image </label></br>
                    <input type="file" name="imgFile" required></br></br>

                    <label > Description </label></br>
                    <textarea name="des" id="des" cols="30" rows="4" required></textarea></br></br>

                    <label > Life expectancy </label></br>
                    <select name="life" id="life" >
                        <option value="#" required>Select Life Exp.</option>
                        <option value="0-1 year" >0-1 year</option>
                        <option value="1-5 years">1-5 years</option>
                        <option value="5-10 years">5-10 years</option>
                        <option value="10+ years">10+ years</option>
                    </select></br></br>

                    <input type="submit" name="submit" value="submit">
                </div>
            </div>
        </div>
    </form>

    <?php
            
        if(isset($_POST['submit']))
        {
            if(!empty($_FILES['imgFile']['name']))
            {
                $name=$_FILES['imgFile']['name'];
                $fileTmpName = $_FILES['imgFile']['tmp_name']; // stores file in templocation 
                $fileType = $_FILES['imgFile']['type']; // stores file extension for ex. pdf,jpeg,txt,etc 
                $fileExtension = strtolower(end(explode('.', $name))); // it stores extension in lower case
                $name = str_replace("$name", "$name."."$fileExtension", "$name");
                $uploadPath = "./images/" . $name;  //path to store file in perticular location of our system
                move_uploaded_file($fileTmpName, $uploadPath);//uploades the file to location of our system
                
                $anm=$_POST['anm'];
                $cat=$_POST['cat'];
                $des=$_POST['des'];
                $life=$_POST['life'];

                $query="INSERT into animal_info (namee,categoryy,images,descri,life) values ('$anm' , '$cat' , '$name' , '$des' , '$life')";

                $result=mysqli_query($con,$query);
                $row = mysqli_fetch_array($result); 
                // echo 'Animal Information Added Successfully';
                header("Location: ../pixel6Drive/animals.php");

            }        
        }

    ?>



</body>
</html>