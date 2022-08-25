<?php
include "../basic.php";
$data=products_list("deleted");
if(isset($_GET["id"])){
    products_delete($_GET["id"],"restore");
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
      <div class="action">
         <div class="container">
            <a href="products-list.php"><button>Product List</button></a>            
         </div>
      </div>

    <div class="sales">
      <div class="container">
         <?php 
            while($product=mysqli_fetch_assoc($data)){ ?>
               <div class="product">
               <img src="../img/<?php echo $product["image"];?>" alt="">
               <h3><?php echo $product["name"]; ?></h3>
               <p><?php echo $product["paragraph"]; ?></p>
               <a href="products-trash.php?id=<?php echo $product["id"];?>"><button class="del-btn">Restore</button></a> 

            </div>
         <?php   }?>
         
         
         </div>
      </div>
    </div>

 </body>
 </html>