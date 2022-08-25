<?php
include "../basic.php";
if(isset($_POST["username"])){
    $user=get_user($_POST["username"]);
    if(isset($user["username"])){
        echo "This username is already taken";
    }else{
        create_user($_POST["name"],$_POST["username"],$_POST["password"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "$project_name"; ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body style="background-color:#f6f6f6">
    <div class="header">
        <div class="container">
            <img class="logo" src="../<?php echo "$project_logo";?>" alt="">            
            <div class ="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#footer">About</a></li>
                </ul>
            </div>
            

            </div>
        </div>

    </div>
    <div class="sign" id="sign">
        <div class="container">
        <h2 class="special-heading">Sign Up</h2>
            <div class="sign-content">
                <form method="post" action="sign-up.php">
                    <input type="text" placeholder="Full Name" name="name" >
                    <input type="text" placeholder="Username" name="username" >
                    <input type="password" placeholder="Password" name="password" >
                    <button type="submit" name="save_bt">Login</button>
                    <a href="/my-project/">Don't have an account</a>
                </form>  
            </div>
        </div>

    </div>
</body>
</html>