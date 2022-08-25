<?php
include "../basic.php";
if(isset($_POST['name'])){
    if($_FILES["image"]["name"] == ""){
        $filename = "defult.png";
    }else{
        // Getting the Image Temp Name
        // Setting the Image Location
        // Naming Algorithm
        // Uploading Image file
        $name=$_FILES["image"]["tmp_name"];
        $location="../img/";
        $filename=strtolower($_POST['name']);
        $filename=str_replace(" " , "&" ,$filename);
        $filename=$filename . "-logo.png";
        move_uploaded_file($name,$location . $filename);
    }
    customers_new($filename , $_POST['name'] , $_POST['paragraph']);

}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$project_name"; ?></title>    
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 </head>
 <style>
   body{
      background-color:#ddd;
   }

 </style>
 <body>
   <div class="header">
        <div class="container">
            <img class="logo" src="../<?php echo "$project_logo";?>" alt="">
            <div>
                <a href="sign-out.php"><button class="sign-btn">log out</button></a>
            </div>              
        </div>
    </div>

    <div class="form">
      <div class="container">
            <div class="form-new">
                <h2 class="special-heading">New</h2>
                <form method="POST" action="customers-new.php" enctype="multipart/form-data">
                    
                    <input type="file" placeholder="customer Name" name="image">
                    <input type="text" placeholder="customer Name" name="name" required>
                    <input type="text" placeholder="customer pohne" name="paragraph">
                    <button type="submit" name="save_bt">Save</button>

                </form>
            </div>       
         
    </div>
    </div>

 </body>
 </html>