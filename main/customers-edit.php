<?php include "../basic.php";
if(isset($_POST["name"])){
    customers_update($_POST["id"],$_POST["name"],$_POST["phone"],$_FILES["image"]);
} 

$data=customers_edit($_GET["id"]);
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
                <h2 class="special-heading">Edit</h2>
                <form method="POST" action="customers-edit.php" enctype="multipart/form-data">
                    <img src="../img/<?php echo $data["image"] ?>" alt="">

                    <input type="file" name="image">
                    <input type="hidden" value="<?php echo $data["id"] ?>" name="id">
                    <input type="text" value="<?php echo $data["name"] ?>" name="name" required>
                    <input type="text" value="<?php echo $data["phone"] ?>" name="phone">
                    <button type="submit" name="save_bt">Save</button>

                </form>
            </div>       
         
    </div>
    </div>

 </body>
 </html>