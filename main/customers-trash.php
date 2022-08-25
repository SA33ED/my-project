<?php
include "../basic.php";
$data=customers_list("deleted");
if(isset($_GET["id"])){
    customers_delete($_GET["id"],"restore");
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
            <a href="customers-list.php"><button>customer List</button></a>            
         </div>
      </div>

    <div class="sales1">
      <div class="container">
         <?php 
            while($customer=mysqli_fetch_assoc($data)){ ?>
               <div class="product1">
               <img src="../img/<?php echo $customer["image"];?>" alt="">
               <h3><?php echo $customer["name"]; ?></h3>
               <p><?php echo $customer["phone"]; ?></p>
               <a href="customers-trash.php?id=<?php echo $customer["id"];?>"><button class="del-btn">Restore</button></a> 

            </div>
         <?php   }?>
         
         
         </div>
      </div>
    </div>

 </body>
 </html>